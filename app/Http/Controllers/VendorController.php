<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function vendor_add(){
        return view('content.vendor_add');
    }

    public function vendor_edit(){
        return view('content.vendor_add');
    }

    public function vendor_view(){
        return view('content.vendor_add');
    }
}
