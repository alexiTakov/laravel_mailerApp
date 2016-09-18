<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
	function __construct()
	{
		$this->middleware('guest');
	}


	public function index()
	{
		return view('mail.home');
	}
}
