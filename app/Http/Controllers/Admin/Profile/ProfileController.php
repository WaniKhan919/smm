<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class ProfileController extends Controller
{
    protected $isAdmin = true;
    
    public function profile_update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
        ]);

        $admin = Admin::where('email', auth()->user()->email)->first();
        if($admin){
            $admin = $admin->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            if($admin) {
                return back()->with(session()->flash('alert', 'Profile edited successfully!'));
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
            $admin = Admin::where('email', auth()->user()->email);
            
            if($admin){
                $admin = $admin->update([
                    'password' => Hash::make($request->password),
                ]);

                if($admin) {
                    return back()->with(session()->flash('alert', 'Category changed successfully!'));
                }else{
                    return back();
                }
            }else{
                return back();
            }
        }else{
            return back()->with(session()->flash('error', 'Invalid current password!'));
        }
    }
}