<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function welcome(){
        return view('structure.welcome');
    }
    public function partnership(){
        return view('structure.partnership');
    }

    public function volunteer(){
        return View('structure.volunteer');
    }
}
