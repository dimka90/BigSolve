<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function welcome(){
        return view('structure.welcome');
    }
    public function index(){
        return view('structure.index');
    }
}
