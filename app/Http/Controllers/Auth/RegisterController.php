<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = RouteServiceProvider::HOME;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'User_IC' => ['required', 'digits:12', 'numeric', 'unique:users,User_IC,'],
			'User_Name' => ['required', 'string', 'max:255'],
			'User_Gender' => ['required', 'in:Lelaki,Perempuan'],
			'User_Phone_Number' => ['required', 'numeric', 'digits_between:10,15'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'],
			'password' => ['required', 'string', 'min:8', 'confirmed'],
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return \App\Models\User
	 */
	protected function create(array $data)
	{
		return User::create([
			'User_IC' => $data['User_IC'],
			'User_Name' => $data['User_Name'],
			'User_Gender' => $data['User_Gender'],
			'User_Phone_Number' => $data['User_Phone_Number'],
			'email' => $data['email'],
			'password' => Hash::make($data['password']),
		]);
	}
}
