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

//gaberlaku (beda database)
Route::get("/items", "ItemController@index");
Route::get("/items/create", "ItemController@create");
Route::post("/items", "ItemController@store");

// crud satu
Route::get("/pertanyaan", "PertanyaanController@index");
Route::post("/pertanyaan", "PertanyaanController@store");
Route::get("/pertanyaan/create", "PertanyaanController@create");
Route::get("/jawaban/{pertanyaan_id}", "JawabanController@index");
Route::post("/jawaban/{pertanyaan_id}", "JawabanController@store");

// crud dua
Route::get("/pertanyaan/{id}", "PertanyaanController@show");
Route::get("/pertanyaan/{id}/edit", "PertanyaanController@edit");
Route::put("/pertanyaan/{id}", "PertanyaanController@update");
Route::delete("/pertanyaan/{id}", "PertanyaanController@destroy");