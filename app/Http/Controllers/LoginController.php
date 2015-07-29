<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class LoginController extends Controller {

	//Login view return
	function login(){


		return view('Login');
	}

	function proceed(Requests\LoginRequest $request){


		return \Redirect::to('dashboard');

    
	}

	function logout(){


	 
	 \Session::flush();

	 return \Redirect::to('login');
	}

}
