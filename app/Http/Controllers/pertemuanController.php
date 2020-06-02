<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pertemuanController extends Controller
{

    public function index(){

        return view('admin.pertemuan.index');
    }

    public function edit(){

        return view('admin.pertemuan.edit');
    }


    public function show(){

        return view('admin.pertemuan.show');
    }
}
