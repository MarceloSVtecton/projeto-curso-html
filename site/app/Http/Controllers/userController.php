<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller

{
    public function showProfile($user) 
    {
        return view('user.profile', ['user' => User::findOrFail($user)]);
    }
    //
}
