<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(usersSeeder::class);
       // $this->call(clasesSeeder::class);
       // $this->call(alumnosSeeder::class);
       // $this->call(maestrosSeeder::class);
        //$this->call(leccionesSeeder::class);
    }
}
