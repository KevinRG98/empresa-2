<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


//Route::get('personas', 'PersonasController@index')->name('personas.index');
//Route::get('personas/{id}', 'PersonasController@show')->name('personas.show');

Route::get('personas', function () {return view('personas');})->name('personas');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');