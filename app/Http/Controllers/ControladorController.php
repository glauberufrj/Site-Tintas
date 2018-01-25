<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorController extends Controller
{
    public function fazerAlgo(){

      return view('welcome');
    }

    public function fazerMickey(Request $request){

      //dd($request);
      $nome=$request->firstname;
      $sobrenome=$request->input('lastname');
      dd($nome,$sobrenome);
    }
}
