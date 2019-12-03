<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DownloadController extends Controller
{
    public function index(){
    	return view('Downloads');
    }
}
