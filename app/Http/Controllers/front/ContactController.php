<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $message = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'link' => $request->link,
            'country' => $request->country,
            'keyword' => $request->keyword,
            'message' => $request->message,
        ]);
        if($message){
            return back()->with(session()->flash('alert', 'Message successfully sent!'));
        }else{
            return back();
        }
    }
}
