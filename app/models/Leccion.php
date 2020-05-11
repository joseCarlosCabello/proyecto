<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    protected $fillable = ['id', 'nombre_clase', 'profesor_id','horario','bandera'];

}
