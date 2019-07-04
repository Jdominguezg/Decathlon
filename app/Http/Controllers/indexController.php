<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use App;

class indexController extends Controller
{
   
   public function show(){

   		if(Auth::guest()){
   			return view('login-register');
   		}else{
   			return view('profile');
   		}
   		
   }


   public function translate(){

   		return redirect('/');
   }

}
