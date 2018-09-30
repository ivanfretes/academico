<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory; 

class StudentSeeder extends Seeder
{

	

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = FakerFactory::create();

    	for ($i=0; $i < 20; $i++) {

			DB::table('students')->insert([
	            'student_name' => $faker->firstName,
	            'student_last_name' => $faker->lastname,
	            'student_civil_status' => $faker->randomElement(
	            	['s','c','v']
	             ),
	            'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
	        ]);
		}

        
    }
}
