<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_add(){
        return view('content.user_add');
    }

    public function user_edit(){
        return view('content.user_add');
    }

    public function user_view(){
        return view('content.user_add');
    }
}
