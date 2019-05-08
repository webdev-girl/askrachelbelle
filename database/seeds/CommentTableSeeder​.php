<?php

use Illuminate\Support\str;
use Illuminate\Database\Seeder;

class CommentTableSeeder​ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {

           // $r = 0 . '-' . 10;
          $post = App\Post::all();

          $post->each(function($post){
               factory(App\Comment::class)
                ->create([
                       'post_id' => $post->id,
                       'user_id' => App\User::all()->random()->id,
                    ]);
            });

            factory(App\Comment::class, 50)->create()->each(function ($post_id) {
                for($i=0; $i<=rand(1,30); $i++) {
                    $post_id>comment()->save(factory(App\Comment::class)->make());
            }

        });
    }
 }
