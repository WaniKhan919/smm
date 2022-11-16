<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function profile_update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
        ]);

        $user = User::where('email', auth()->user()->email)->first();
        if($user){
            $user = $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            if($user) {
                return back()->with(session()->flash('alert', 'Profile Successfully Updated.'));
            }else{
                return back();
            }
            
        }else{
            return back();
        }
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required | confirmed',
            'password_confirmation' => 'required',
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)){
            $user = User::where('email', auth()->user()->email);
            
            if($user){
                $user = $user->update([
                    'password' => Hash::make($request->password),
                ]);

                if($user) {
                    return back()->with(session()->flash('alert', 'Password Successfully Changed.'));
                }else{
                    return back();
                }
            }else{
                return back();
            }
        }else{
            return back()->with(session()->flash('error', 'Invalid Current Password.'));
        }
    }
}