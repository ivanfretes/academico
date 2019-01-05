<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class AlumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function ($u) {
	        $u->posts()->save(factory(App\Post::class)->make());
	    });
    }
}
