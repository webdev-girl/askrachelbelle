<?php

use Illuminate\Support\str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('users')->insert([

         'name' => Str::random(10),
         'email' => Str::random(10).'@gmail.com',
         'password' => bcrypt('secret'),
         ]);

         factory(App\User::class, 50)->create()->each(function ($user) {
             $user->post()->save(factory(App\Post::class)->make());
         });
     }
}
