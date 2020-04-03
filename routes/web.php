<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */


//Rotas do Painel
Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@index');    
    Route::resource('funcionarios', 'Painel\FuncionarioController');    
    Route::resource('contracheques', 'Painel\ContraChequeController');
    Route::get('download', 'Painel\ContraChequeController@download')->name('downloadPDF');
    Route::post('ajxContraCheques','Painel\ContraChequeController@ajxContraCheques');
    
});


//ROTAS DO SITE

Route::get('/orcamento', 'Site\SiteController@orcamento');
Route::get('/', 'Site\SiteController@index');
Route::get('/sobre', 'Site\SiteController@sobre');
Route::get('/cliente', 'Site\SiteController@cliente');
Route::get('/servicos', 'Site\SiteController@servicos');
Route::get('/predial', 'Site\SiteController@predial');
Route::get('/trabalhe', 'Site\SiteController@trabalhe');
Route::get('/contato', 'Site\SiteController@contato');   





//ROTA ENVIAR CURRICULUM
Route::post('enviadp', 'Site\SiteController@enviar');

//ROTA ENVIAR EMAIL CONTATO

Route::post('enviacontato', 'Site\SiteController@contact');



Auth::routes();

//HEAD
Route::get('/logout', 'Auth\LoginController@logout');


