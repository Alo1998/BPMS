<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;



class LoginController extends Controller
{
    public function adminlogin(){
        return view('backend.auth.login');
    }
    public function adminsubmit(Request $request){
        $login = $request->only('email','password');
        if(auth()->attempt($login)){
            return redirect()->route('admin.dashboard');
        }else{
            session()->flash('error', 'Invalid Email or Password');
            return redirect()->back();
        }
    }

    public function adminlogout(){
        \auth()->logout();
        return redirect()->route('adminlogin');

    
    }
    public function adminprofile(){
        return view('backend.auth.profile');
    }
}
