<?php

namespace App\Http\Controllers;

use App\Constants\Status;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signIn(Request $_request)
    {
        $credentials = $_request->only('username', 'password');

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
        $data = $_request->all();
        $data['password'] = Hash::make($_request->password);

        $user = User::create($data);

        return response()->json([
            "data" => null,
            "status" => Status::SUCCESS
        ], 201);
    }
}