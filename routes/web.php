<?php

use App\Http\Controllers\controlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify' => true]);

Route::get('/form_alumno',function(){
    return view("formulario");
})->name('form_alumno');
Route::resource('proyecto', 'controlador');
//Route::resource('proyecto', 'MaestroController');


Route::post('/crear_leccion', 'controlador@Leccion_store')->name('proyecto.Leccion_store');

Route::get('/form_leccion',function(){
    return view("formulario_leccion");
})->name('form_leccion');

Route::post('/agregar_maestro', 'controlador@Maestro_store')->name('proyecto.Maestro_store');

Route::get('/form_maestro',function(){
    return view("formulario_maestros");
})->name('form_maestro');



//*********actualizaciones */
Route::GET('/actualizar_alumno/{alumno}/editar', 'controlador@editar_alumno')->name('proyecto.Editar_alumno');
Route::PATCH('/actualizar_alumno/{alumno}', 'controlador@update_alumno')->name('proyecto.Update_alumno');

Route::GET('/actualizar_leccion/{leccion}/editar', 'controlador@Leccion_editar')->name('proyecto.Leccion_editar');
Route::PATCH('/actualizar_leccion/{leccion}', 'controlador@Leccion_update')->name('proyecto.Leccion_update');

Route::GET('/actualizar_maestro/{maestro}/editar', 'controlador@Maestro_editar')->name('proyecto.Maestro_editar');
Route::PATCH('/actualizar_maestro/{maestro}', 'controlador@Maestro_update')->name('proyecto.Maestro_update');

/**********eliminar */
Route::delete('/maestros/{maestro}', 'controlador@Maestro_destroy')->name('proyecto.Maestro_destroy');
Route::delete('/lecciones/{leccion}', 'controlador@Leccion_destroy')->name('proyecto.Leccion_destroy');

//**********index */
Route::get('/maestros','controlador@Maestro_index')->name('proyecto.Maestro_index');
Route::get('/lecciones','controlador@Leccion_index')->name('proyecto.Leccion_index');

/**********show */
Route::get('/maestros/{maestro}','controlador@Maestro_show')
->where('maestro','[0-9]+')
->name('proyecto.Maestro_show');


Route::get('/lecciones/{leccion}','controlador@Leccion_show')
->where('leccion','[0-9]+')
->name('proyecto.Leccion_show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
