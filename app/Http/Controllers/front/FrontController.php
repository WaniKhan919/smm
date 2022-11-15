<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function about(){
        return view('front.about');
    }
    public function faq(){
        return view('front.faq');
    }
    public function contact(){
        return view('front.contact');
    }
    public function blog(){
        return view('front.blog');
    }
    public function pricing(){
        return view('front.pricing');
    }
    public function services(){
        return view('front.services');
    }
}
