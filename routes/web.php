<?php

//routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\RecintosController;
use App\Http\Controllers\CuidadoresController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('especies', EspecieController::class);
Route::resource('recintos', RecintosController::class);
Route::resource('cuidadores', CuidadoresController::class);



