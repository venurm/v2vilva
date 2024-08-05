<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function showContactForm()
    {
        return view('customer.newpages.contact');
    }

    public function store(Request $request)
    {
        

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://secure-admin.vilvabusiness.com/api/leads/add',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
         CURLOPT_POSTFIELDS =>'{
            "source": "Contact Form",
            "name": "'.$request->name.'",
            "email": "'.$request->email.'",
            "mobile": "'.$request->phone.'",
            "description": "'.$request->message.'"
        }
        ',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic VmlsVmEzMTEwMTgzNjpZNjUzRXJ0cnMzQDNzN3lkdWlH'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//dd($response);


        if($response) {
            
            return redirect()->intended('/contact')->with('message', 'Successfully submitted.');
        } else {
            return redirect()->back()->withInput()->withErrors(['error' => 'Something went wrong please try again later.']);
        }
    }
    
}


