<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/servicios/{validar?}', function ($validar=null) {
    return view('servicios',['validar' => $validar]);
})->where('validar', '[A-Za-z]+')->name('servicios');

Route::get('/proyectos/{validar?}', function ($validar=null) {
    return view('proyectos',['validar' => $validar]);
})->where('validar', '[A-Za-z]+')->name('proyectos');

Route::get('/clientes/{validar?}', function ($validar=null) {
    return view('clientes',['validar' => $validar]);
})->where('validar', '[A-Za-z]+')->name('clientes');

Route::get('/blog/{parameter?}', function ($parameter=null) {
    return view('blog',['parameter' => $parameter]);
})->where('parameter', '[0-9]+')->name('blog');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');