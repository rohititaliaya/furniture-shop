<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePassword;
use App\Http\Requests\ForgotPassword;
use App\Http\Requests\OTPVerification;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\UserVerify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    //
    public function login_ui()
    {
        return view('auth.login');
    }
    public function register_ui()
    {
        return view('auth.register');
    }
    public function forgot_password_ui()
    {
        return view('auth.forgot-password');
    }
    public function login(Request $request)
    {
        // check user exists
        $user = User::where('email', $request->input('email'))->first();
        if ($user) {
            if ($user->is_active == false) return response()->json(['errors' => ['message' => ['This account is not active.']]], 400);
            if (Hash::check($request->input('password'), $user->password)) {
                // authenticated
                Auth::login($user);
                return response()->json(['message' => 'Authenticated.'], 200);
            } else {
                // invalid password
                return response()->json(['errors' => ['message' => ['Invalid password.']]], 400);
            }
        } else {
            // invalid email
            return response()->json(['errors' => ['message' => ['Invalid email.']]], 400);
        }
    }

    public function register(RegisterRequest $request)
    {
        // If RegisterRequest passes, create the user
        $user = User::where('email', $request->input('email'))->first();

        if ($user) {
            if ($user->is_verified) {
                return response()->json(['errors' => ['message' => ['The email is already exists.']]], 400);
            }
            $user->update([
                'password' => Hash::make($request->input('password')),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'is_verified' => true,
            ]);
            Auth::login($user);
            // response
            return response()->json(['message' => 'User updated and logged in.'], 200);
        } else {
            $user = User::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'avatar' => config('app.url') . 'images/default/default_avatar.jpg',
                'is_verified' => true,
            ]);
            Auth::login($user);
            // response
            return response()->json(['message' => 'User created and logged in.'], 200);
        }
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
    public function forgot_password(ForgotPassword $request)
    {
        // check existed user
        $user = User::where('email', $request->input('email'))->where('is_active', true)->first();
        if ($user) {
            // generate new password
            $otp = rand(100000, 999999);
            $user->update(['password' => Hash::make($otp)]);
            // send email here
            Mail::raw('Your new password is ' . $otp, function ($message) use ($user) {
                $message->to($user->email);
            });
            // response
            return redirect('/forgot-password-verification');
        }
        // response
        return back()->withErrors(['email' => 'Cannot find user with this email.'])->withInput($request->input());
    }

    public function change_password(ChangePassword $request)
    {
        $user = User::find(Auth::user()->user_id);
        if (Hash::check($request->input('password'), $user->password)) {
            $user->update([
                'password' => Hash::make($request->input('new_password')),
            ]);
            return redirect('/');
        }
        return back()->withErrors(['password' => 'Invalid password'])->withInput($request->input());
    }
}
