<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function account()
    {
        $user = Auth::user();        
        return view('customer.account',compact('user'));
    }

    public function showRegisterForm()
    {
        if (Auth::check()) {
            return redirect()->to('/account');
        }
        
        return view('customer.auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|min:1|max:15',
            'last_name' => 'required|string|min:1|max:15',
            'email' => 'required|string|email|max:255|unique:customers',
            'mobile' => 'required|string|size:10|unique:customers',
            'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
        ]);        

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            DB::beginTransaction();

            $validated = $validator->validated();

            $customer = Customer::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'mobile' => $validated['mobile'],
                'password' => Hash::make($validated['password']),
            ]);

            Auth::guard('web')->login($customer);

            DB::commit();

            return redirect()->intended('/account');

        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error occurred in ' . __METHOD__, [
                'path' => $request->path(),
                'line' => $e->getLine(),
                'error' => $e->getMessage(),
            ]);

            return redirect()->back()->withInput()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }

    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->to('/account');
        }

        return view('customer.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (!Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return redirect()->back()->withErrors([
                'email' => 'The provided credentials are incorrect.',
            ])->withInput();
        }

        return redirect()->intended('/account')->with('message', 'Successfully logged in.');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect('/')->with('message', 'Successfully logged out.');
    }
}
