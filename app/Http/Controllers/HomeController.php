<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	
	 // Show admin dashboard.
	public function indexAdmin()
	{
		return view('admin.admin');
	}

	// Show staff dashboard.
	public function indexStaff()
	{
		return view('staff.staff');
	}

	// Show user dashboard.
	public function indexUser()
	{
		return view('user.user');
	}
}
