<?php

namespace App\Http\Controllers;

use App\Constants\Status;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signIn(Request $_request)
    {
        $credentials = $_request->only('email', 'password');

        if (Auth::attempt($credentials)) 
        {
            return response()->json([
                "data" => null,
                "status" => Status::SUCCESS
            ],200);
        } 
        else 
        {
            return response()->json([
                "data" => null,
                "status" => Status::FAILED
            ], 401);
        }
    } 

    public function register(UserRequest $_request)
    {
        $user = User::create($_request->all());

        return response()->json([
            "data" => null,
            "status" => Status::SUCCESS
        ], 201);
    }
}