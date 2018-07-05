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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('pelis','controllerPelis');
Route::resource('pelis2','controllerPelis2');

//Route::post('/postajax','AjaxController@post');
//ruta de la pagina de ajax
Route::get('ajaxpelis',function(){
    return view('listadoajax2');
   // return view('listadovuejs');
 });
 //ruta del controlador ajax
 //Route::post('/postajax','AjaxController@post'); //devuelve por aca postajax es llamado desde el javascript ajax
 Route::post('/postajax','AjaxController@post'); //devuelve por aca postajax es llamado desde el javascript ajax
// Route::post('/postbusqueda','AjaxController@postbusqueda'); 

