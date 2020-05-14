<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Leccion extends Model
{
    protected $fillable = ['id', 'nombre_clase', 'profesor_id','horario','bandera'];
    use softDeletes;
}
