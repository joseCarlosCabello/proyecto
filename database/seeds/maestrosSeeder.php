<?php

use App\models\Maestro;
use Illuminate\Database\Seeder;

class maestrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maestro::create([
            'id'=>7,
            //'clase_id'=>2,
            'nombre'=>'andrew78',
            'horario'=>'l-',
            'horas'=>4,
        ]);
    }
}
