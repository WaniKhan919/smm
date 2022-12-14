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
        if(Auth::user()->email == "guest@gmail.com"){
            Auth::logout();
            return view('front.login');
        }
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
        $price=floatval($price)*100;
        $session= $user->checkoutCharge($price,$package->title,1,[
            'success_url' => route('user.payment.success'),
            'cancel_url' => route('user.payment.cancel')
        ]);
          $subscription=new Subscription();
          $subscription->user_id=$user->id;
          $subscription->name=$user->name;
          $subscription->stripe_id=$session->id;
          $subscription->stripe_status=$session->payment_status;
          $subscription->stripe_price=$price/100;
          $subscription->quantity=1;
          $subscription->package_id=$request->service_id;
          $subscription->url=$request->url;
          $subscription->daily_speed=$request->daily_speed;
          $subscription->country=$request->country;
          $subscription->keyword=$request->keyword;
          $subscription->status="Pending";
          $subscription->email=$request->email;
          if($subscription->save()){
            session()->put('SUB_ID',$subscription->id);
            session()->flash('stripe_login_override', true);
            return redirect($session->url);
          }
    }
    public function success(Request $request){
        $sub_id=session()->get('SUB_ID');
        $subscription=Subscription::findOrFail($sub_id);
        $subscription->stripe_status='paid';
        $subscription->update();
        session()->forget('SUB_ID');
        $message['success']='Payment Success';
        // if(auth()->user()->email == "guest@gmail.com"){
        //     Auth::logout();
        // }
        return view('front.thankyou',$message);
    }
    public function cancel(Request $request){
        $sub_id=session()->get('SUB_ID');
        $subscription=Subscription::findOrFail($sub_id);
        $subscription->stripe_status='cancel';
        $subscription->update();
        session()->forget('SUB_ID');
        $message['error']='Payment Failed';
        // if(auth()->user()->email == "guest@gmail.com"){
        //     Auth::logout();
        // }
        return view('front.thankyou',$message);
    }
}
