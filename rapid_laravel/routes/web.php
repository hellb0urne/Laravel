<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('plantilla');
});


Route::resource("producto","ProductoController");