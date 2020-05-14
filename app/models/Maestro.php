<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Maestro extends Model
{
    protected $fillable = ['id', 'clase_id', 'nombre','horario','horas'];
    use softDeletes;
}
