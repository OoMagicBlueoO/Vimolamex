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

Route::get('/', 'PagesController@home');

// auth
Route::get('Login','AuthController@login');
Route::get('Register','AuthController@register');
Route::post('Login','AuthController@loginVerify');
Route::get('Logout', 'AdminController@logout');

Route::group(['middleware'=>'admin'],function(){
  Route::get('Admin', 'AdminController@dashboard');
  Route::get('Admin/Siniestros', 'AdminController@siniestros');
  Route::get('Admin/Calendario', 'AdminController@calendario');
  Route::get('Admin/Mensajes', 'AdminController@mensajes');
  Route::get('Admin/Archivos', 'AdminController@archivos');
  Route::get('Admin/Estadisticas', 'AdminController@estadisticas');
});
