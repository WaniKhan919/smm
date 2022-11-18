<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{
    public function index(){
        $orders=DB::table('subscriptions')
        ->select('subscriptions.*','subscriptions.id as sub_id','users.*','packages.*')
        ->join('users', 'users.id', '=', 'subscriptions.user_id')
        ->join('packages', 'packages.id', '=', 'subscriptions.package_id')
        ->get();
        return view('admin.order.index',compact('orders'));
    }
    public function status($id,$status){
        $order=Subscription::findOrFail($id);
        $order->status=$status;
        $order->update();
        return redirect()->back();
    }
}
