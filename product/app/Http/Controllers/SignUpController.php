<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Exception;

class SignupController extends Controller
{
    public function index(){
    	return view('SignUp');
    }

    public function redirect(){
    	return Socialite::driver('google')->redirect();
    }

    public function callback(){
    	try{
    		$google = Socialite::driver('google')->user();
    		$exist_user = User::where('email',$google->email)->first();

    		if($exist_user){
    			Auth::loginUsingId($exist_user->id);
    		}

    		else{
    			$user = new User;
    			$user->name = $google->name;
                $user->email = $google->email;
                $user->google_id = $google->id;
                $user->password = md5(rand(1,10000));
                $user->save();
                Auth::loginUsingId($user->id);
    		}

    		return redirect()->route('CompleteProfile');
    	}


    	 catch (Exception $e) {
            return $e->getMessage();
        }
    }




    public function fbredirect(){
    	return Socialite::driver('facebook')->redirect();
    }

    public function fbcallback(){
    	try{
    		$google = Socialite::driver('facebook')->user();
            $exist_user = User::where('email',$google->email)->first();
    		if($exist_user){
    			Auth::loginUsingId($exist_user->id);
                return redirect()->route('Index');
    		}

    		else{
    			$user = new User;
    			$user->name = $google->name;
                $user->email = $google->email;
                $user->google_id = $google->id;
                $user->password = md5(rand(1,10000));
                $user->save();
                Auth::loginUsingId($user->id);
    		}

    		return redirect()->route('CompleteProfile');
    	}


    	 catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function complete_profile(request $request){
        
        $user = Auth::user();
        return view('CompleteProfile',compact('user'));
    }


    public function user_update(request $request){
        $user = User::where('email',$request->email)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('Index');
    }

    public function register(request $request){
        $user = User::get();
        if($user->email==$request->email){
            $request->session()->flash('error','Email has already exists!');
            return redirect()->route('SignUp');
        }

        else{
            $usernew = new User;
            $usernew->name = $request->name;
            $usernew->email = $request->email;
            $usernew->password = Hash::make($request->password);
            $usernew->save();
            return redirect()->route('Index');
        }
    }



}
