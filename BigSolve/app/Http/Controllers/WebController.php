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

use Illuminate\Routing\Route;

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

    public function index(){
        return view('structure.login');
    }

    public function adminHome(){
        return view('admin.dashboard');
    }

   public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email'
        ]);
        if (Auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (Auth::user()->usertype == 1) {
                $partners = Partner::all();
                return view('admin.home', compact('partners'));
            }

            else 
            {
                return redirect('/');
            }
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }


    //   volunteer
    public function volunteering(Request $request)
    {
        $voluntary = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:volunteers',
            'phone' => 'required',
            'nationality' => 'required',
            'occupation'  => 'required',
            'skills' => 'required',
            'sdg' => 'required',
            'availability' => 'required',
            'experience' => 'required',
            'projects' => 'required',
            'address' => 'required',
            'why' => 'required'
        ]);

        $volunteer = new Volunteer();
        $volunteer->name = $request->name;
        $volunteer->email = $request->email;
        $volunteer->phone = $request->phone;
        $volunteer->nationality = $request->nationality;
        $volunteer->occupation = $request->occupation;
        $volunteer->skills = $request->skills;
        $volunteer->sdg = $request->sdg;
        $volunteer->availability = $request->availability;
        $volunteer->experience = $request->experience;
        $volunteer->projects = $request->projects;
        $volunteer->address = $request->address;
        $volunteer->why = $request->why;

        $volunteer->save();

        return redirect()->back();
    }

    public function current(){
        $current = Partner::all();
        return view('structure.current', compact('current'));
    }
}
