<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function index(){
    	$users = User::orderBy('id','desc')->get();
    	return view('Admin.User.Index',compact('users'));
    }

    public function create(request $request){
    	return view('Admin.User.Add');
    }

    public function store(request $request){
    	$user = new User;
    	$user->name = $request->Name;
    	$user->email = $request->Email;
    	$user->mobile = $request->Mobile;
    	$user->password = Hash::make($request->Password);
    	$user->role = $request->Role;
    	$user->Status = $request->Status;
    	$user->save();
    	$request->session()->flash('success','User Submited Successfully!');
    	return redirect()->route('Admin/Users');
    }

    public function editsession(request $request){
    	Session::put('edit_id',$request->Edit);
    	return redirect()->route('Admin/Users/Edit');
    }

    public function edit(request $request){
    	$edit_id = Session::get('edit_id');
    	$edit = User::where('id',$edit_id)->first();
    	return view('Admin.User.Add',compact('edit'));
    }

    public function update(request $request){
    	$user = User::where('id',$request->Update)->first();
    	$user->name = $request->Name;
    	$user->email = $request->Email;
    	$user->mobile = $request->Mobile;
    	$user->password = Hash::make($request->Password);
    	$user->role = $request->Role;
    	$user->Status = $request->Status;
    	$user->save();
    	$request->session()->flash('success','User Updated Successfully!');
    	return redirect()->route('Admin/Users');
    }

    public function delete(request $request){
    	User::where('id',$request->Delete)->delete();
    	$request->session()->flash('success','User Removed!');
    	return redirect()->route('Admin/Users');
    }
}
