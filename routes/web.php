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



Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/producto', 'ProductoController@index')->name('producto');
Route::post('/producto/new', 'ProductoController@store');
Route::post('/producto/new', 'ProductoController@store');
Route::get('/proveedores', 'ProveedorController@index')->name('proveedores');
Route::post('/proveedores/new', 'ProveedorController@store');
Route::get('/index', 'HomeController@index2');

