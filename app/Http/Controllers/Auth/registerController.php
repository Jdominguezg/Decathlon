<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{

	public function register(Request $request){

		$rules =  [
			trans('form.name') => 'bail|required|string',
			trans('form.surname') => 'bail|required|string',
			trans('form.dni') => 'bail|required|unique:users|max:9|string',
			trans('form.email') => 'bail|required|email|unique:users|string',
			trans('form.password') => 'bail|required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[ºª!@"#·$%&¬()=?¡¿`´\[\]^+*¨{}ç,;.:-_]).{6,}$/|string',
			'register' => 'min:0'
		];


		$dataValidator = Validator::make($request->all(), $rules);


		if($dataValidator->passes()){

			$insert = [
				'name' => $request[trans('form.name')],
				'surname' => $request[trans('form.surname')],
				'dni' => $request[trans('form.dni')],
				'email' => $request[trans('form.email')],
				'password' => Hash::make($request[trans('form.password')]),
				'remember_token' => $request['token'],
				'created_at' => Carbon::now()
			];

			DB::table('users')->insert($insert);

			return redirect('/')
					->with('congrats', ['ok']);
			
		}
		else{
			return back()
					->withErrors($dataValidator)
					->with('register', ['fail'])
					->withInput();
			
		}


	}
}
