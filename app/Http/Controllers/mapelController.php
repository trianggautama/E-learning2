<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mapelController extends Controller
{
    public function index(){

        return view('admin.mapel.index');
    }

    public function edit(){

        return view('admin.mapel.edit');
    }


    public function show(){

        return view('admin.mapel.show');
    }
}
