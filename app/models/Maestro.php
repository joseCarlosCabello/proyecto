<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Maestro extends Model
{
    protected $fillable = ['id', 'clase_id', 'nombre','horario','horas'];
    use softDeletes;

    public function getNombreAttribute($value)
    {
      return ucwords(strtolower($value));
    }
    public function setNombreAttribute($value)
    {
      $this->attributes['nombre'] = strtoupper($value);
    }


}
