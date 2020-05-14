<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Alumno extends Model
{
    protected $fillable = ['id','nombre'];
    use softDeletes;
}
