<?php

namespace App\Http\Controllers\Admin;

use App\Models\Estimation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EstimationController extends Controller
{
    public function index()
    {
        try {
            $estimations = Estimation::all();
            return response()->json([
                'code' => 200,
                'message' => 'Estimations fetched successfully',
                'data' => $estimations
            ]);
        } catch (\Exception $e) {
            Log::error('Error in EstimationController@index: ' . $e->getMessage());
            return response()->json([
                'code' => 500,
                'message' => 'Failed to fetch estimations'
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'items' => 'required|array',
                'items.*.item' => 'required|string|max:250',
                'items.*.item_description' => 'required|string|max:250',
                'items.*.Quantity' => 'required|integer|min:0',
                'items.*.Price' => 'required|numeric|min:0',
                'items.*.Discount' => 'required|numeric|min:0|max:100',
                'items.*.TAX' => 'required|numeric|min:0',
                'items.*.Total' => 'required|numeric|min:0',
                'lead_id' => 'required|exists:leads,id',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'code' => 400,
                    'message' => 'Validation Error',
                    'data' => $validator->errors()
                ], 400);
            }

            $items = $request->input('items');
            $lead_id = $request->input('lead_id');

            $estimation = Estimation::where('lead_id', $lead_id)->first();

            if (!$estimation) {
                Estimation::create([
                    'items' => json_encode($items),
                    'lead_id' => $lead_id,
                ]);
            } else {
                $estimation->update([
                    'items' => json_encode($items),
                ]);
            }

            return response()->json([
                'code' => 200,
                'message' => 'Estimation stored successfully',
                'data' => [
                    'lead_id' => $lead_id,
                    'items' => $items,
                ],
            ], 200);
        } catch (\Exception $e) {
            Log::error('Error in EstimationController@store: ' . $e->getMessage());
            return response()->json([
                'code' => 500,
                'message' => 'Failed to store estimation'
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $estimation = Estimation::findOrFail($id);
            return response()->json([
                'code' => 200,
                'message' => 'Estimation fetched successfully',
                'data' => $estimation
            ]);
        } catch (ModelNotFoundException $e) {
            Log::error('Error in EstimationController@show: ' . $e->getMessage());
            return response()->json([
                'code' => 404,
                'message' => 'Estimation not found'
            ], 404);
        } catch (\Exception $e) {
            Log::error('Error in EstimationController@show: ' . $e->getMessage());
            return response()->json([
                'code' => 500,
                'message' => 'Failed to fetch estimation'
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'index' => 'required|integer',
                'item_description' => 'required|string|max:250',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'code' => 400,
                    'message' => 'Validation Error',
                    'data' => $validator->errors()
                ], 400);
            }

            $index = $request->input('index');
            $itemDescription = $request->input('item_description');

            $estimation = Estimation::findOrFail($id);

            $items = json_decode($estimation->items, true);

            if (!isset($items[$index])) {
                return response()->json([
                    'code' => 400,
                    'message' => 'Invalid index provided',
                ], 400);
            }

            $items[$index]['item_description'] = $itemDescription;

            $estimation->items = json_encode($items);

            $estimation->save();

            return response()->json([
                'code' => 200,
                'message' => 'Item description updated successfully',
                'data' => $estimation,
            ], 200);
        } catch (ModelNotFoundException $e) {
            Log::error('Error in EstimationController@update: ' . $e->getMessage());
            return response()->json([
                'code' => 404,
                'message' => 'Estimation not found'
            ], 404);
        } catch (\Exception $e) {
            Log::error('Error in EstimationController@update: ' . $e->getMessage());
            return response()->json([
                'code' => 500,
                'message' => 'Failed to update item description'
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $estimation = Estimation::findOrFail($id);
            $estimation->delete();

            return response()->json([
                'code' => 200,
                'message' => 'Estimation deleted successfully',
                'data' => $estimation,
            ], 200);
        } catch (ModelNotFoundException $e) {
            Log::error('Error in EstimationController@destroy: ' . $e->getMessage());
            return response()->json([
                'code' => 404,
                'message' => 'Estimation not found'
            ], 404);
        } catch (\Exception $e) {
            Log::error('Error in EstimationController@destroy: ' . $e->getMessage());
            return response()->json([
                'code' => 500,
                'message' => 'Failed to delete estimation'
            ], 500);
        }
    }
}
