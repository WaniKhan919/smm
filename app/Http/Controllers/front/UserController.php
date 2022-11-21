<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ServicePackage;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Cashier\Subscription;
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
        $id=Auth::guard('web')->user()->id;
        $orders=DB::table('subscriptions')
        ->select('subscriptions.*','subscriptions.id as sub_id','users.*','service_packages.*')
        ->join('users', 'users.id', '=', 'subscriptions.user_id')
        ->join('service_packages', 'service_packages.id', '=', 'subscriptions.package_id')->orderBy('subscriptions.id','Desc')->where('subscriptions.user_id',$id)
        ->get();
        return view('user.order',compact('orders'));
    }
    public function buypackage(Request $request){
        Stripe::setApiKey(env('STRIPE_KEY', 'STRIPE_KEY'));
        $user=Auth::guard('web')->user();
        $stripe_customer=$user->createOrGetStripeCustomer();
        $package=ServicePackage::findOrFail($request->service_id);
        $price= $package->price;
        if($package->sale_price){
            $price= $package->sale_price;
        }
        $session= $user->checkoutCharge($price,$package->title,1,[
            'success_url' => route('user.payment.success'),
            'cancel_url' => route('user.payment.cancel')
        ]);
          $subscription=new Subscription();
          $subscription->user_id=$user->id;
          $subscription->name=$user->name;
          $subscription->stripe_id=$session->id;
          $subscription->stripe_status=$session->payment_status;
          $subscription->stripe_price=$price;
          $subscription->quantity=1;
          $subscription->package_id=$request->service_id;
          $subscription->url=$request->url;
          $subscription->country=$request->country;
          $subscription->status="Pending";
          if($subscription->save()){
                return redirect($session->url);
          }
    }
    public function success(Request $request){
        $message['success']='Payment Success';
        return view('front.thankyou',$message);
    }
    public function cancel(Request $request){
        $message['error']='Payment Failed';
        return view('front.thankyou',$message);
    }
}
