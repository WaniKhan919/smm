<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function about(){
        return view('front.about');
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
        return view('front.blog',compact('blogs'));
    }
    public function blogSearch(Request $request){
        $blogs=BlogPost::where('title','like','%'.$request->search.'%')
        ->orWhere('description','like','%'.$request->search.'%')
        ->get();
        return view('front.blog',compact('blogs'));
    }
    public function pricing(){
        return view('front.pricing');
    }
    public function services(){
        return view('front.services');
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
}
