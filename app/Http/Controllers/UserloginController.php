<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Teacher;

class UserloginController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest')->except('userLogout');
    }


    public function userShowLogin()
    {
        return view('login');
    }
    public function userLogin(Request $request)
    {            
        $this->validate($request,[
                'email'=>'required',
                'password'=>'required',
            ]);

    	// return $request->all();
       if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
       {

        return redirect()->route('welcome'); 
       	     
       }else{
            return redirect()->route('user.login')->with(['status'=>'تم']);
       }

    }

    public function userLogout()
    {

        Auth::guard()->logout();
        return redirect()->route('user.login');
    }
}
