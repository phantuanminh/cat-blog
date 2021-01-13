<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller {
	public function getLogin() {
		if(Auth::check()){
			return redirect('/');
		}
		return view('login');
	}
	protected function postLogin(Request $request) {
		// If data correct, check with database
		$email = $request->input('email');
		$password = $request->input('password');
		if(Auth::attempt(['email' => $email, 'password' =>$password])) {
			// If correct, redirect to admin page
			return redirect('/');
		} else {
			// If incorrect
			return redirect('login');
		}
	}
}