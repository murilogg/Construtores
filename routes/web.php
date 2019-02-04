<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');

route::get('/nome', 'MeuControlador@getNome')->name("nome");

route::get('/idade', 'MeuControlador@getIdade')->name("idade");

route::get('/multiplicar/{n1}/{n2}', 'MeuControlador@Multi');

route::get('/nome/{id}', 'MeuControlador@nomeId');

route::resource('/cliente','ClienteControlador');

route::post('/cliente/requisitar','ClienteControlador@requisitar');
