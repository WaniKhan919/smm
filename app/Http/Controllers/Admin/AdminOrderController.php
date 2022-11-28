<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageCategory;
use App\Models\PackageType;
use App\Models\ServicePackage;
use App\Models\ServicePackageCategory;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{
    public function index(){
        $orders=DB::table('subscriptions')
        ->select('subscriptions.*','subscriptions.id as sub_id','users.*','service_packages.*')
        ->join('users', 'users.id', '=', 'subscriptions.user_id')
        ->join('service_packages', 'service_packages.id', '=', 'subscriptions.package_id')->orderBy('subscriptions.id','Desc')
        ->get();
        return view('admin.order.index',compact('orders'));
    }
    public function orderDetail($id){
        $order=Subscription::where('id',$id)->first();
        $package=ServicePackage::where('id',$order->package_id)->first();
        $category=ServicePackageCategory::where('id',$package->service_id)->first();
        $user=User::where('id',$order->user_id)->first();
        return view('admin.order.view',compact('order','package','category','user'));
    }
    public function status($id,$status){
        $order=Subscription::findOrFail($id);
        $order->status=$status;
        $order->update();
        return redirect()->back();
    }
    public function destroy($id){
        $sub = Subscription::find($id);
        if($sub){
            $sub = $sub->delete();
            if($sub){
                return back()->with(session()->flash('alert', 'Order Successfully Deleted'));
            }else{
                return back()->with(session()->flash('alert', 'Failed to Delete'));
            }
        }else{
            return back()->with(session()->flash('alert', 'Failed to Delete'));
        }
    }
}
