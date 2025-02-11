<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{

    public function register(Request $request)
     {
    

        $request->validate([
            'username' => 'required|string|unique:users',
            'userpwd' => 'required|string|min:6',
            'email' => 'required|string|email|unique:users'
        ]);

        $user = User::create([
            'name' => $request->username,
            'password' => Hash::make($request->userpwd),
            'email' => $request->email
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'User registered successfully',
            'token' => $token,
            'user' => $user
        ], 201);
    }

    // User Login
    public function login(Request $request) {
        $request->validate([
            'username' => 'required|string',
            'userpwd' => 'required|string'
        ]);

        $user = User::where('email', $request->username)->first();

        if (!$user || !Hash::check($request->userpwd, $user->userpwd)) {
            throw ValidationException::withMessages([
                'message' => ['Invalid credentials']
            ]);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'token' => $token,
            'user' => $user
        ], 200);
    }

    // User Logout
    public function logout(Request $request) {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logout successful'
        ], 200);
    }

}
