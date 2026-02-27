<?php
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Hola-mundo', function () {
    return view('hola');
});

Route::get('Contacto', [ContactoController::class, 'contacto']);
Route::POST('recibe_formulario', [ContactoController::class, 'recibeFormulario']);