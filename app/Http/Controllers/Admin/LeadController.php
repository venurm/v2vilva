<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function index()
    {
        try {
            $leads = Lead::all();
            return response()->json([
                'code' => 200,
                'message' => 'Leads retrieved successfully',
                'data' => $leads
            ], 200);
        } catch (\Exception $e) {
            Log::error('Error occurred in ' . __METHOD__, [
                'error' => $e->getMessage(),
            ]);

            return response()->json([
                'code' => 500,
                'message' => 'Failed to retrieve leads'
            ], 500);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:leads',
            'phone' => 'required|string|max:15',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 422,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $lead = Lead::create($validator->validated());
            return response()->json([
                'code' => 201,
                'message' => 'Lead stored successfully',
                'data' => $lead,
            ], 201);
        } catch (\Exception $e) {
            Log::error('Error occurred in ' . __METHOD__, [
                'error' => $e->getMessage(),
            ]);

            return response()->json([
                'code' => 500,
                'message' => 'Failed to store lead'
            ], 500);
        }
    }

  
    public function show($id)
    {
        try {
            $lead = Lead::find($id);

            if (!$lead) {
                return response()->json([
                    'code' => 404,
                    'message' => 'Lead not found'
                ], 404);
            }

            return response()->json([
                'code' => 200,
                'message' => 'Lead retrieved successfully',
                'data' => $lead
            ], 200);
        } catch (\Exception $e) {
            Log::error('Error occurred in ' . __METHOD__, [
                'error' => $e->getMessage(),
            ]);

            return response()->json([
                'code' => 500,
                'message' => 'Failed to retrieve lead'
            ], 500);
        }
    }

  
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255|unique:leads,email,' . $id,
            'phone' => 'sometimes|string|max:15',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 422,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $lead = Lead::find($id);

            if (!$lead) {
                return response()->json([
                    'code' => 404,
                    'message' => 'Lead not found'
                ], 404);
            }

            $lead->update($validator->validated());
            return response()->json([
                'code' => 200,
                'message' => 'Lead updated successfully',
                'data' => $lead
            ], 200);
        } catch (\Exception $e) {
            Log::error('Error occurred in ' . __METHOD__, [
                'error' => $e->getMessage(),
            ]);

            return response()->json([
                'code' => 500,
                'message' => 'Failed to update lead'
            ], 500);
        }
    }

   
    public function destroy($id)
    {
        try {
            $lead = Lead::findOrFail($id);
            $lead->delete();

            return response()->json([
                'code' => 204,
                'message' => 'Lead deleted successfully'
            ], 204);
        } catch (\Exception $e) {
            Log::error('Error occurred in ' . __METHOD__, [
                'error' => $e->getMessage(),
            ]);

            return response()->json([
                'code' => 500,
                'message' => 'Failed to delete lead'
            ], 500);
        }
    }
}
