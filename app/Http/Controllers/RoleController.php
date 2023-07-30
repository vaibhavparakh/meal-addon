<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role_add(){
        return view('content.role_add');
    }

    public function role_edit(){
        return view('content.role_add');
    }

    public function role_view(){
        return view('content.role_add');
    }
}
