<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Question::class, 50)->create()->each(function ($question) {
            // $u->posts()->save(factory(App\Post::class)->make());
        });
    }
}
