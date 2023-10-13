<?php

namespace App\Http\Controllers;

use App\Constants\Status;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Ramsey\Uuid\Type\Integer;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        
        if ($products->isEmpty()) {
            return response()->json([
                "data" => $products,
                "status" => Status::FAILED
            ],404);
        }

        return response()->json([
            "data" => $products,
            "status" => Status::SUCCESS
        ],200);
    }

    
    public function create(ProductRequest $_request)
    {
        $product = Product::create($_request->all());
        
        return response()->json([
            "data" => $product,
            "status" => Status::SUCCESS
        ],201);
    }

    public function update(ProductRequest $_request ,$productId)
    {
        $product = Product::find($productId);
        
        if(!$product)
        {
            return response()->json([
                "data" => null,
                "status" => Status::FAILED
            ],404);
        }

        $product->update($_request->all());
        
        return response()->json([
            "data" => null,
            "status" => Status::SUCCESS
        ],200);
    }

}
