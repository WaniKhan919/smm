<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    protected $isAdmin = true;
    
    public function index()
    {
        $data['packages']=Package::count();
        $data['users']=User::count();
        $data['blogs']=BlogPost::count();
        return view('admin.dashboard.index',$data);
    }

    public function profile()
    {
        return view('admin.profile.profile');
    }
}
