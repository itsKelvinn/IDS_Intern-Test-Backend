<?php

namespace App\Http\Controllers;

use App\Constants\Status;
use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use Ramsey\Uuid\Type\Integer;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        if($transactions->empty())
        {
            return response()->json([
                "data" => $transactions,
                Status::FAILED
            ],404);
        }

        return response()->json([
            "data" => $transactions,
            Status::SUCCESS
        ],200);
    }

    public function create(TransactionRequest $_request)
    {
        $transactions = Transaction::create($_request->all());
        
        return response()->json([
            "data" => $transactions,
            Status::SUCCESS
        ],200);
    }

    public function update(TransactionRequest $_request , Integer $_transactionId)
    {
        $transactions = Transaction::find($_transactionId);

        if(!$transactions)
        {
            return response()->json([
                "data" => $transactions,
                Status::FAILED
            ],404);
        }

        $transactions->update($_request->all());

        return response()->json([
            "data" => $transactions,
            Status::SUCCESS
        ],200);
    }

}
