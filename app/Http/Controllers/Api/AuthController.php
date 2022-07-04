<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.verify', ['except' => ['login', 'register']]);
    }

    public function login() {
        $credentials = request(['email', 'password']);

        if(!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->responseWithToken($token);
    }

    public function me() {
        return response()->json(auth()->user());
    }

    public function logout() {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out!']);
    }

    public function refresh() {
        return $this->responseWithToken(auth()->refresh());
    }

    protected function responseWithToken($token) {
        return response()->json([
            "access_token" => $token,
            "token_type" => "bearer",
            "expires_in" => auth()->factory()->getTTL() * 60
        ]);
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            "name"=>'required|string|max:255',
            "email"=>'required|string|email|max:255|unique:users',
            "password"=>'required|string|min:6|confirmed',
        ]);

        if($validator->fails()) {
            return response()->json([
                "status"=>"error",
                "success"=>"false",
                "error"=>$validator->errors()->toArray()
            ], 400);
        }

        $user = User::create([
            "name"=>$request->input("name"),
            "email"=>$request->input("email"),
            "password"=>Hash::make($request->input("password")),
        ]);
    
        return response()->json([
            "message"=>"User Has Been Created!",
            "user"=>$user,
        ]);
    }
}
