<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi.ruta.a', function () {
    return 'Hola esta es mi ruta';
});

Route::get('/php-basico', function () {
    return 'Estoy aprendiendo php';
});

