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
                'verification_code' => null,
                'otp_expires_at' => null
            ]);

            $code = rand(1000, 9999);
            $codeExpiration = now()->addMinutes(2);

            $user->verification_code = $code;
            $user->otp_expires_at = $codeExpiration;
            $user->save();

            Log::info("Generated Verification Code: $code");
            Mail::to($user->email)->send(new VerificationCodeMail($code, $codeExpiration));

            return response()->json([
                'status' => 'success',
                'message' => 'Verification OTP sent to your email',
                'redirect_url' => route('users.verifyotp', ['email' => $user->email]),
            ], 200);


        }
        catch(\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                'data' => null,
            ]);
        }
    }

    public function verifyotp(Request $request)
    {
        try {
            // Validate the OTP and role
            $validator = Validator::make($request->all(), [
                'otp' => 'required|array|min:4|max:4',  // Ensure OTP is an array of 4 digits
                'role' => 'required|integer|in:1,2',   // Validate role
            ]);

            // If validation fails, return an error response
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'warning',
                    'message' => $validator->errors()->first(),
                ], 404);
            }

            // Convert the OTP array into a string
            $otp = implode('', $request->input('otp'));

            $email = $request->email;

            // Fetch the user using the email from the session
            $user = User::where('email', $email)->first();

            // Handle case where user is not found
            if (!$user) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'User not found with the provided email',
                ], 404);
            }

            // Check if the verification code matches
            if ($user->verification_code == $otp) {
                // Check if OTP has expired
                if (now()->greaterThan($user->otp_expires_at)) {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'OTP has expired. Please request a new one.',
                    ], 400);
                }
                
                // Mark OTP as verified and update user status if needed
                $user->verification_code = null;  // Invalidate OTP after successful verification
                $user->email_verified_at = now(); // Optionally set email verification timestamp
                $user->save();

                return response()->json([
                    'status' => 'success',
                    'message' => 'OTP verified successfully. Proceeding to login.',
                ], 200);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid OTP. Please try again.',
                ], 400);
            }

        } catch (\Exception $e) {
            // Handle exceptions and return an error response
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                'data' => null,
            ], 500);
        }
    }
    public function login(Request $req){
        try{
           $validator = Validator::make($req->all(),[
            'email'=>'required | email',
            'password'=>'required'
           ]) ;
           if($validator->fails()){
            return response()->json([
                'status'=>'warning',
                'message'=>$validator->errors()->first(),
            ],404);
           }
         if(Auth::attempt(['email' => $req->email, 'password' => $req->password ])){
            $user = Auth::user();
            if($user->role == 1 && $user->email_verified_at != null){
                return response()->json([
                    'status ' => 'success',
                    'message' => 'User Logged In Successfully',
                    'data' => null
                ],);
            }
            else{
                return response()->json([
                    'status' => 'success',
                    'message' =>'Admin Logged in Successfully',
                    'data' => null,
                ]);
            }
         }
         else{
            return response()->json([
                'status' => 'error',
                'message' =>'The provided credentials do not match our records.',
                'data' => null,
            ]);
         }

        }catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                'data' => null,
            ]);
        }
    }

    public function resendverifyotp(Request $request)
    {
    try{
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email', // Validate email
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ], 400);
        }
    
        $email = $request->email;
        $user = User::where('email', $email)->first();
    
        if ($user && now()->greaterThan($user->otp_expires_at)) {
            $code = rand(1000, 9999);
            $codeExpiration = now()->addMinutes(2);
    
            $user->verification_code = $code;
            $user->otp_expires_at = $codeExpiration;
            $user->save();
    
            Log::info("Generated Verification Code: $code");
            Mail::to($user->email)->send(new VerificationCodeMail($code, $codeExpiration));
    
            return response()->json([
                'status' => 'success',
                'message' => 'Verification OTP resent to your email',
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Cannot resend OTP. Try again later.',
            ], 400);
        }
    }
    catch(\Exception $e){
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
            'data' => null
        ], 400);
    };
}
    
}
