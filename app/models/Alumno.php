<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['id', 'clase_id','Clase_alumno' ,'nombre','contraseña','horas'];
}
