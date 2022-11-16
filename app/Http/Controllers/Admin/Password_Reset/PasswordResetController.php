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
    public function index()
    {
        return view('admin.password_reset.index');
    }

    public function email(Request $request)
    {
        $request->validate([
            'email' => 'required | email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        // session()->flash('alert', 'A Password resetting email has been sent to you.');
        return $status === Password::RESET_LINK_SENT? back()->with(['status' => __($status), 'alert' => 'A Password resetting email has been sent to you.']): back()->withErrors(['email' => __($status)]);
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
     
        $status = Password::reset(
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
