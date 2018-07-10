<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test()
	{
		return 'chaparrita eres la mejor I ♥ U';
	}
	
	public function nameAndNickname($name,$nickname=null)
	{
		$name=ucfirst($name);
		
		if ($nickname)
			return "Bienvenido {$name}, acaba de registrarte como: {$nickname}.";
		else
			return "Bienvenido {$name}, usted no ha registrado su apodo.";
	}
}
