<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DemoPageController extends Controller
{
    public function index(){
    	return view('DemoPage');
    }
}
