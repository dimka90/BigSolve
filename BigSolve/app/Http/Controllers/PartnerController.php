<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class PartnerController extends Controller
{

    public function register(Request $request)
    {
        $formdata = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'organization' => 'required',
            'sdg' => 'required',
            'email' => 'required|unique:partners',
            'description' => 'required',
            // 'principles' => 'required',
            'strategy' => 'required',
            'experience' => 'required',
            'projects' => 'required',
            'password' => 'required|max:6 min:4|confirmed'
        ]);
        // dd($formdata);
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->location = $request->location;
        $partner->organization = $request->organization;
        $partner->sdg = $request->sdg;
        $partner->email = $request->email;
        $partner->description = $request->description;
        // $partner->principles = $request->principles;
        $partner->strategy = $request->strategy;
        $partner->experience = $request->experience;
        $partner->projects = $request->projects;
        $partner->password = Hash::make($request->password);

        // $partner->save();
        
        if($partner->save()){
            return 'Success ';
        }

        else{
            return "invalid";
        }
        // return redirect()->back();
    }
}
