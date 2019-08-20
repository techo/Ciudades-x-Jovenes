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

Route::get('/', 'CxjController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('cxj/original', function () {
    return view('cxj/original');
});

Route::get('cxj', 'CxjController@index');
Route::get('nicaragua', 'CxjController@nicaragua');

Route::get('cxj/mesas/create', 'MesasController@create');
Route::get('cxj/mesas/', 'MesasController@index')->middleware('auth');
Route::get('cxj/mesas/{mesa}', 'MesasController@show')->middleware('auth');
Route::post('/cxj/mesas/', 'MesasController@store');


Route::resource('proyectos', 'ProyectosController');
Route::patch('tareas/{tarea}', 'ProyectoTareasController@update');
Route::post('/proyectos/{proyecto}/tareas/', 'ProyectoTareasController@store');
