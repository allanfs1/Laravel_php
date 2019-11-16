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

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


Route::get("/graficos","Site1Controller@index")->name("graficos.graficos");
Route::get("/metas","MetasController@index")->name("graficos.metas");
Route::get("/Forms","FormsController@index")->name("graficos.create");
Route::post("/home","MetasController@store")->name('graficos.store');


//Route::resource('graficos','Site1Controller');
//Route::resource('metas','MetasController');
//Route::resource('Forms','FormsController');

