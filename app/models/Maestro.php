<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $fillable = ['id', 'clase_id', 'nombre','horario','horas'];
}
