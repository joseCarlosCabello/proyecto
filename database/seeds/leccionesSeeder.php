<?php
use App\models\Leccion;
use Illuminate\Database\Seeder;

class leccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leccion::create([
            'nombre_clase'=>'japones',
            'profesor_id'=>'1',
            'horario'=>'l-m',
        ]);
    }
}
