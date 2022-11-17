<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stripe\Stripe;

class UserController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ]);
        $model=new User();
        $model->name=$request->name;
        $model->lastname=$request->lastname;
        $model->email=$request->email;
        $model->phone=$request->phone;
        $model->password=Hash::make($request->password);
        if($model->save()){
            Auth::guard('web')->login($model);
            return redirect('/');
        }else{
            return redirect()->back()->with('error','Register failed');
        }
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if (Auth::guard('web')->attempt($request->only(['email','password']))) {
            return redirect()->intended(route('index'));
        }else{
            return back()->with('error','Failed to login');
        }
    }
    public function updateprofile(Request $request){
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
        $model=User::find(Auth::guard('web')->user()->id);
        $model->name=$request->name;
        $model->lastname=$request->lastname;
        $model->email=$request->email;
        $model->phone=$request->phone;
        if($model->update()){
            return redirect()->back()->with('success','Profile updated successfully');
        }else{
            return redirect()->back()->with('error','Failed to update profile');
        }
    }
    public function updatepassword(Request $request){
        $request->validate([
            'current_password'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ]);
        $model=User::find(Auth::guard('web')->user()->id);
        if(isset($request->password)){
            if(Hash::check($request->current_password,$model->password)){
                $model->password= Hash::make($request->password);
                if($model->update()){
                    return redirect()->back()->with('success','Password changed successfully');
                }else{
                    return redirect()->back()->with('error','Failed to change password');
                }
            }else{
                return redirect()->back()->with('error','Your current password not matched!');
            }
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
    public function dashbard(){
        return view('user.index');
    }
    public function profile(){
        return view('user.profile');
    }
    public function changepassword(){
        return view('user.changepassword');
    }
    public function orders(){
        return view('user.order');
    }
    public function buypackage(Request $request){
        Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');
        $user=Auth::guard('web')->user();
        $package=Package::findOrFail($request->package_id);
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price' => 100,
              'quantity' => 1,
              ]],
            'mode' => 'subscription',
            'success_url' => route('user.payment.success'),
            'cancel_url' => route('user.payment.cancel'),
          ]);
          return redirect($session->url);
    }
    public function success(Request $request){
        return $request->all();
    }
    public function cancel(Request $request){
        return $request->all();
    }
}
