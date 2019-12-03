<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(){
    	if(isset(Auth::user()->id)){
    		return redirect()->route('Index');
    	}
    	else{
    	return view('Login');
    }


    }

     public function profile(request $request){
     	$user = Auth::user();
    	return view('Profile',compact('user'));
    }

    public function UpdateProfile(request $request){
    	$auth = Auth::user();
    	$user = User::where('email',$auth->email)->first();
    	$user->name = $request->name;
    	$user->Mobile = $request->Mobile;
    	$user->Description = $request->Description;
    	$user->save();
    	$request->session()->flash('success','Your Profile Updated Successfull!');
    	return redirect()->route('Profile');

    }
}
