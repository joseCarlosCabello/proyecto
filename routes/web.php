<?php

use App\Http\Controllers\controlador;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify' => true]);

Route::get('/form_alumno',function(){
    return view("formulario");
})->name('form_alumno');
Route::resource('proyecto', 'controlador')->middleware("auth");
//Route::resource('proyecto', 'MaestroController');


Route::post('/crear_leccion', 'controlador@Leccion_store')->name('proyecto.Leccion_store')->middleware("auth");

Route::get('/form_leccion',function(){
    return view("formulario_leccion");
})->name('form_leccion')->middleware("auth");

Route::post('/agregar_maestro', 'controlador@Maestro_store')->name('proyecto.Maestro_store');

Route::get('/form_maestro',function(){
    return view("formulario_maestros");
})->name('form_maestro')->middleware("auth");



//*********actualizaciones */
Route::GET('/actualizar_alumno/{alumno}/editar', 'controlador@editar_alumno')->name('proyecto.Editar_alumno')->middleware("auth");
Route::PATCH('/actualizar_alumno/{alumno}', 'controlador@update_alumno')->name('proyecto.Update_alumno')->middleware("auth");

Route::GET('/actualizar_leccion/{leccion}/editar', 'controlador@Leccion_editar')->name('proyecto.Leccion_editar')->middleware("auth");
Route::PATCH('/actualizar_leccion/{leccion}', 'controlador@Leccion_update')->name('proyecto.Leccion_update')->middleware("auth");

Route::GET('/actualizar_maestro/{maestro}/editar', 'controlador@Maestro_editar')->name('proyecto.Maestro_editar')->middleware("auth");
Route::PATCH('/actualizar_maestro/{maestro}', 'controlador@Maestro_update')->name('proyecto.Maestro_update')->middleware("auth");

/**********eliminar */
Route::delete('/maestros/{maestro}', 'controlador@Maestro_destroy')->name('proyecto.Maestro_destroy')->middleware("auth");
Route::delete('/lecciones/{leccion}', 'controlador@Leccion_destroy')->name('proyecto.Leccion_destroy')->middleware("auth");
Route::delete('/alumno/{alumno}', 'controlador@Alumno_destroy')->name('proyecto.Alumno_destroy')->middleware("auth");
/**********restaurar */
Route::get('/maestros/restore/{maestro}', 'controlador@Maestro_restore')->name('proyecto.Maestro_restore')->middleware("auth");
Route::get('/lecciones/restore/{leccion}', 'controlador@Leccion_restore')->name('proyecto.Leccion_restore')->middleware("auth");
Route::get('/alumno/restore/{alumno}', 'controlador@restore')->name('proyecto.restore')->middleware("auth");

//**********index */
Route::get('/maestros','controlador@Maestro_index')->name('proyecto.Maestro_index')->middleware("auth");
Route::get('/maestros/deleted','controlador@Maestro_index_deleted')->name('proyecto.Maestro_index_deleted')->middleware("auth");
Route::get('/alumnos/deleted','controlador@index_deleted')->name('proyecto.index_deleted')->middleware("auth");
Route::get('/lecciones/deleted','controlador@Leccion_index_deleted')->name('proyecto.Leccion_index_deleted')->middleware("auth");
Route::get('/lecciones','controlador@Leccion_index')->name('proyecto.Leccion_index');

/**********show */
Route::get('/maestros/{maestro}','controlador@Maestro_show')
->where('maestro','[0-9]+')
->name('proyecto.Maestro_show')->middleware("auth");


Route::get('/lecciones/{leccion}','controlador@Leccion_show')
->where('leccion','[0-9]+')
->name('proyecto.Leccion_show')->middleware("auth");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware("verified");
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
