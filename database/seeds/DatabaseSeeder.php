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
        factory(App\User::class,3)->create()->each( function($usr)
        {
        	$usr->questions()
        	->saveMany(factory(App\Question::class,rand(1,4))->make()
        );
        });
    }
}
