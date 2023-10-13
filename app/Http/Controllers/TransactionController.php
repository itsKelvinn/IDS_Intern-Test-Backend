<?php

namespace App\Http\Controllers;

use App\Constants\Status;
use App\Http\Requests\TransactionRequest;
use App\Models\Product;
use App\Models\Transaction;
use Ramsey\Uuid\Type\Integer;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        if($transactions->isEmpty())
        {
            return response()->json([
                "data" => null,
                "status" => Status::FAILED
            ],404);
        }

        return response()->json([
            "data" => $transactions,
            "status" => Status::SUCCESS
        ],200);
    }

    public function create(TransactionRequest $_request)
    {
        $validatedTransaction = $_request->all();
        $product = Product::find($validatedTransaction['productID']);

        if ($product) {
            $validatedTransaction['productName'] = $product->productName;
            $transaction = Transaction::create($validatedTransaction);

            return response()->json([
                "data" => $transaction,
                "status" => Status::SUCCESS
            ], 200);
        } else {
            return response()->json([
                "error" => "Product not found",
                "status" => Status::FAILED
            ], 404);
        }
    }



    public function update(TransactionRequest $_request , $transactionId)
    {
        $transactions = Transaction::find($transactionId);

        if(!$transactions)
        {
            return response()->json([
                "data" => $transactions,
                "status" => Status::FAILED
            ],404);
        }

        $transactions->update($_request->all());

        return response()->json([
            "data" => $transactions,
            "status" => Status::SUCCESS
        ],200);
    }

}
