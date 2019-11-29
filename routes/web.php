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


//Route::resource('graficos','MetasController');
Route::get("/graficos","Site1Controller@index")->name("graficos.graficos");
Route::get("/metas","MetasController@index")->name("graficos.metas");
Route::get("/Forms","FormsController@index")->name("graficos.create");
Route::post("/home","MetasController@store")->name('graficos.store');
Route::get("/show/{id}","MetasController@show")->name('graficos.show');
Route::get("/edit/{id}","MetasController@edit")->name('graficos.edit');
Route::put("/update/{id}","MetasController@update")->name('graficos.update');
Route::delete("/delete/{id}","MetasController@destroy")->name('graficos.destroy');




