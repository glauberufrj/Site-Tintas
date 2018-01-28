<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorController extends Controller
{
    public function exibirInicio(){

      return view('inicio');
    }

    public function exibirContato(){

      return view('contato');
    }

    public function exibirProdutos(){

      return view('produtos');
    }

    public function fazerMickey(Request $request){

      //dd($request);
      $nome=$request->firstname;
      $sobrenome=$request->input('lastname');
      dd($nome,$sobrenome);
    }
}
