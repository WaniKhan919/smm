<?php

namespace App\Http\Controllers\front;

use App\Models\Faq;
use App\Models\Review;
use App\Models\Package;
use App\Models\Service;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index(){
        $reviews=Review::where('published', true)->orderBy('id', 'Desc')->limit(3)->get();
        $blogs=BlogPost::orderBy('id','Desc')->limit(6)->get();
        return view('front.index',compact('blogs', 'reviews'));
    }
    public function about(){
        $reviews=Review::where('published', 1)->limit(3)->get();
        return view('front.about',compact('reviews'));
    }
    public function faq(){
        $faqs=Faq::where('status',1)->get();
        return view('front.faq',compact('faqs'));
    }
    public function contact(){
        return view('front.contact');
    }
    public function blog($id){
        $blogs=BlogPost::where('blog_category_id',$id)->get();
        return view('front.blog',compact('blogs'));
    }
    public function blogDetail($id){
        $blogs=BlogPost::where('id',$id)->get();
        $isSingle = true;
        return view('front.blog',compact('blogs', 'isSingle'));
    }
    public function blogSearch(Request $request){
        $blogs=BlogPost::where('title','like','%'.$request->search.'%')
        ->orWhere('description','like','%'.$request->search.'%')
        ->get();
        return view('front.blog',compact('blogs'));
    }
    public function servicesCategory($id){
        $packages=Package::where('type_id',$id)->get();
        return view('front.pricing',compact('packages'));
    }
    public function service($id)
    {
        $service = Service::find($id);
        $packages = $service->packages;
        return view('front.pricing', compact('service', 'packages'));
    }
    public function login(){
        if(Auth::check()){
            return redirect('/');
        }else{
            return view('front.login');
        }
    }
    public function register(){
        if(Auth::check()){
            return redirect('/');
        }else{
            return view('front.register');
        }
    }

    public function thankyou() {
        return view('front.thankyou');
    }
}
