<?php

namespace App\Api\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{

    public function list()
    {
        try {

            $results = ProductCategory::select('id' , 'name')->get();

            return response()->json([
                'status_code' => 200,
                'list' => $results
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status_code' => 500,
                'message' => $e->getMessage()
            ], 500);
        }
    }

   
}
