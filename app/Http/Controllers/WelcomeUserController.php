<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index ()
	{
		return view('welcome');
	}
	
	public function welcome ()
	{
		$title='Mi persona favorita.';
		return view('test')
			->with ('title',$title);
	}
}
