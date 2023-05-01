<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $token = $user->createToken("auth_token")->plainTextToken;
        //$token = $user->createToken('MyApp')->accessToken;

        return response()->json(['token' => $token]);
    }

    return response()->json(['error' => 'Unauthorized'], 401);
}
}
