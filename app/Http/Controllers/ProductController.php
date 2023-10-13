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
                Status::FAILED
            ]);
        }

        return response()->json([
            "data" => $products,
            Status::SUCCESS
        ]);
    }

    
    public function create(ProductRequest $_request)
    {
        $product = Product::create($_request->all());
        
        return response()->json([
            "data" => $product,
            Status::SUCCESS
        ]);
    }

    public function update(ProductRequest $_request , Integer $_productId){

    }

}
