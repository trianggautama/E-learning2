<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class instrukturController extends Controller
{
    public function index(){

        return view('admin.instruktur.index');
    }

    public function edit(){

        return view('admin.instruktur.edit');
    }
}
