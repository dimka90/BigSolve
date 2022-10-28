<?php

namespace App\Http\Controllers;


use App\Models\Partner;

use App\Models\Volunteer;

use Validator;

use Illuminate\Contracts\View\View;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\View\ViewServiceProvider;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPartner(){
        $partners = Partner::all();
        return view('admin.partner', compact('partners'));
    }
}
