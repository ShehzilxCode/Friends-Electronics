<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\VerificationCodeMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
                'role' => 'required|integer|in:1,2',
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


            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'verification_code' => null
            ]);

            $code = rand(1000, 9999);
            $user->verification_code = $code;
            $user->save();
    
            Log::info("Generated Verification Code: $code"); 
            Mail::to($user->email)->send(new VerificationCodeMail($code));

            return response()->json([
                'status'=>'success',
                'message'=>'Verification OTP sent to your email'
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

    public function verifyotp(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'otp' => 'required|numeric',
                'role' => 'required|integer|in:1,2,3',

            ]);
        
            // If validation fails, return error response
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'warning',
                    'message' => $validator->errors()->first(),
                ], 404);
            }


        }
        catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                'data' => null,
            ]);
        };
    }
}
