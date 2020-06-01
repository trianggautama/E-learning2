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
}
