<?php
/*
    Route::get('/welcome/{parametro1}/{parametro2}', function ($parametro1,$parametro2) {
    $nomePai = "Klemer";
    $lista=[
  		'Estudar',
  		'Assistir Netflix',
  		'Ir na academia',
  	];
    return view('welcome',[
        'name'=>'Fulano',
        'idade'=>12,
        'time'=>'Nova Iguaçu',
        'pai'=>$nomePai,
        'tarefas'=>$lista,
        'parametro1'=>$parametro1,
        'parametro2'=>$parametro2
      ]);
});
*/


Route::get('/inicio', 'ControladorController@exibirInicio');

Route::get('/produtos', 'ControladorController@exibirProdutos');

Route::get('/welcome', 'UsuarioController@store')->name('RotaNova');

Route::get('/contact', 'ContactController@show');

Route::post('/contact',  'ContactController@mailToAdmin');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
