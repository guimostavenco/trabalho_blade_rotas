<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class RotaController extends Controller{
	public function contatoView(){
		return view('contato');
	}

	public function locaisView(){
		return view('locais');
	}

	public function homeView(){
		return view('home');
	}

	public function metodoPut(Request $request, $variavel){
		return response()->view('contato', ['message' => 'voce enviou o formulario com metodo put']);
	}
}

