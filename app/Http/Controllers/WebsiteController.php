<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

	var $data = [];

	public function index(){

		return view('website.body.index', $this->data);

	}

}
