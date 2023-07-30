<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;

class AdminController extends Controller
{
    public function add() {
        return view('content.admin.add');
    }

    public function edit(AdminRequest $request) {
        // SENDING ID 
        // $id = $request->id;
        // $data = Admins::where('id', $id)->get();
        // return view('contents.admin.add')->with('data', $data);

        return view('content.admin.add');
    }

    public function view() {
        // $admins = Admins::where('id', '7')->get();
        return view('content.admin.view');
    }
}
