<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){

        $data = User::where('role',2)->get();
        return view('admin.user.index',compact('data'));
    }

    public function edit(){

        return view('admin.user.edit');
    }

}
