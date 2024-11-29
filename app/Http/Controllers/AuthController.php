<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function logout(){
        Auth::logout();
        return response()->json(
            [
                'status' => 'success',
                'message' => 'Logged out successfully'
            ], 200
        );
    }



    public function register(Request $request){
      
        try {
            // Validate the request
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => ['required', 'min:8'],
                'role' => 'required|integer|in:1,2,3',
            ]);

            // If validator fails
            if($validator->fails())
            {
                Log::info($validator->errors()->first());
                return response()->json(
                    [
                        'status' => 'error',
                        'message' => $validator->errors()->first(),
                    ], 400
                );
            }
            // Create a new user

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role
            
            ]);

            return response()->json([
                'status'=>'success',
                'message'=>'User created successfully'
            ],200
        );
            
        }
        catch(\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                'data' => null,
            ]);
        }
    }
}
