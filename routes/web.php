<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/clientes', function() {
//     return view('clientes.index');
// });

// Route::get('clientes/create',[ClienteController::class,'create']);

Route::resource('clientes', ClienteController::class);