<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use app\models\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name'=>'root',
            'email'=>'root@gmail.com',
            'password'=>bcrypt('tsunayoshi98'),
        ]);

        factory(App\User::class,49)->create();
      /*  factory(App\User::class, 50)->create()->each(function ($user) {
            $user->posts()->save(factory(App\User::class)->make());
        });

        /*User::create([
       'id'=>1,
        'name'=>'root',
        'email'=>'root@gmail.com',
        'password'=>'tsunayoshi98'
        ]);
        factory(User::class)*/
    }
}
