<?php

namespace App\Http\Controllers\Admin\Password_Reset;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Models\Admin;

class PasswordResetController extends Controller
{
    protected $isAdmin = true;
    
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    protected function broker()
    {
        return Password::broker('admins'); //set password broker name according to guard which you have set in config/auth.php
    }

    public function index()
    {
        return view('admin.password_reset.index');
    }

    public function email(Request $request)
    {
        $this->validate(request(), [
            'email' => 'required|email',
        ]);
        $response = Password::broker('admins')->sendResetLink([
            'email' => $request->email
        ]);

        //overridden if condition 
        if($response == "passwords.sent")
        {
        return back()->with(session()->flash('alert', 'Password reset link has been sent, please check your email'));
        }

        return back()->with(session()->flash('alert', 'No such email address in our records, try again'));
    }
    
    public function reset_page($token)
    {
        return view('admin.password_reset.reset', ['token' => $token]);
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
     
        $status = Password::broker('admins')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
        
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('admin.login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
