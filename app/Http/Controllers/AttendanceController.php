<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{

	var $data = [];

	public function index(){
		return view('cms.body.attendance');
	}

}
