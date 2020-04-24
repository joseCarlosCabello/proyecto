<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form_alumno',function(){
    return view("formulario");
})->name('form_alumno');
Route::resource('proyecto', 'controlador');
//Route::resource('proyecto', 'MaestroController');
Route::post('/crear_clase', 'controlador@Clase_store')->name('proyecto.Clase_store');

Route::get('/form_clase',function(){
    return view("formulario_clase");
})->name('form_clase');
