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


Route::get('/welcome', 'ControladorController@fazerAlgo');

Route::post('/welcome', 'UsuarioController@store')->name('RotaNova');

Route::get('apagar/{id}', 'UsuarioController@destroy');

Route::get('/tabela', 'UsuarioController@index');






Route::get('/contato', function () {
    return view('contato');
});

Route::get('/fotos', function () {
    return view('ejcm.fotos');
});

Route::get('servicos', function () {
    return "O serviço do Fulano é muito bom.<br><br>
Gostou?<a href='".url('contato')."'> Esse é o contato dele.</a>";
});

Route::get('servicos/{nome}', function ($nome) {
    return "O serviço do ".$nome." é muito bom.<br><br>
Gostou?<a href='".url('contato')."'> Esse é o contato dele.</a>";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
