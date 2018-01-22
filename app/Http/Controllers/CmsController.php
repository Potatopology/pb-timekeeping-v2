<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Auth;

use App\User;


class CmsController extends Controller
{

	var $data = [];

	public function __contstruct(){
		//
	}

	public function index(){
		return "Basic";
	}

	// USERS CMS

	public function users(){

		$this->data['users'] = User::all();

		return view('cms.body.users-main', $this->data);

	}

	public function login(){
		return view('cms.body.login', $this->data);
		// return view('greeting', ['name' => 'James']);
	}

	public function logger(Request $request){

		$credentials = [
			'email'    => $request->email,
			'password' => $request->password,
		];

		if(Auth::attempt($credentials)){
			Session::flash('msg','Login successful!');
			return redirect('/attendance');
		}
		Session::flash('er_msg','Invalid Login Credentials!');
		return redirect()->back();

	}

	public function test(){
		return view('test', $this->data);
	}

}
