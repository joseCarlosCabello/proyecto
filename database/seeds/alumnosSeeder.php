<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\models\Alumno;
use App\models\Clase;

class alumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Alumno::create([
            'nombre'=>'andrew',
           // $CA='clase_alumno'=>'japones',
            //'clase_id'=>2,
            //'clase_id'=>Clase::where('nombre_clase','japones')->value('id_clase'),
            'contraseña'=>bcrypt('andrew78'),
            'horas'=>3,
        ]);
    }
}
