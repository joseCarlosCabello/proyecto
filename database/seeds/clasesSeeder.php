<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\models\Clase;

class clasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Clase::create([
            'nombre_clase'=>'japones',
            'profesor_id'=>'1',
            'horario'=>'l-m',
        ]);
    }
}
