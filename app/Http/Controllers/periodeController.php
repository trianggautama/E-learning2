<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class periodeController extends Controller
{
    
    public function index(){

        return view('admin.periode.index');
    }

    public function edit(){

        return view('admin.periode.edit');
    }
}
