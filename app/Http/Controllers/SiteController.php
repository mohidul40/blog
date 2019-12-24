<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
    	return \App\Post::all();
    }

    public function about(){
    	return view('about');
    }
}
