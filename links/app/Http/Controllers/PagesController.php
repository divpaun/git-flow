<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	
	    	return view('welcome',[
	    		'foo' => 'ABC'
	    	]
	    );
		
    }
    public function about(){
    	
	    	return view('about');
		
    }
    public function contact(){
    	
	    	return view('contact');
		
    }
    public function signup(){
    	
	    	return view('signup');
		
    }
}
