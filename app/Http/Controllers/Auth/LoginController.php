<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Validator;

class LoginController extends Controller
{

	public function login(Request $request){
		$rules = [
			trans('form.email') => 'required|email|string',
			trans('form.password') => 'required|string'
		];

		$dataValidator = Validator::make($request->all(), $rules);

		if($dataValidator->passes()){

			$credentials = [
				'email' => $request[trans('form.email')],
				'password' => $request[trans('form.password')]
			];

			if(Auth::Attempt($credentials)){
				return redirect('/')
						->with('congrats', ['Has iniciado sesión correctamente']);
			}
			else{
				return back()
				->withErrors([trans('form.password') => trans('auth.failed')])
				->with('login', ['fail'])
				->withInput();
			}
			
		}
		else{
			return back()
			->withErrors($dataValidator)
			->with('login', ['fail'])
			->withInput();
		}
	}	



	public function logout(){
		Auth::logout();
		return redirect('/')
				->with('congrats', ['ok'])
				->with('logout', ['ok']);
	}

}

