<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile_update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
        ]);
    }
}