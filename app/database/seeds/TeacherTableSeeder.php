<?php

use Faker\Factory as Faker;

class TeacherTableSeeder extends Seeder {

    public function run()
    {
        // ------> Primera forma

       /* DB::table('teachers')->delete();

        $teachers = array(
        	array(
        		'nombre' => 'Pepe',
        		'email'  => 'Pepe@gmail.com'
        		),
        	array(
        		'nombre' => 'Juan',
        		'email'  => 'Juan@gmail.com'
        		)
           	);

        DB::table('teachers')->insert($teachers);*/


        // ------> Segnda forma

        /*DB::table('teachers')->delete();

        $faker = Faker\Factory::create();
        
        for ($i = 0; $i < 10; $i++)
        {
        $teachers = array(
            'nombre' => $faker->userName,
            'email' => $faker->email
         );
        DB::table('teachers')->insert($teachers);
        }*/

        // -----> Tercera forma
        
        DB::table('teachers')->delete(); 

        $faker = Faker::create('es_ES');

        foreach(range(1, 5) as $index)
        {
            $teachers = array(
                'nombre' => $faker->name,
                'email' => $faker->email
            );

            DB::table('teachers')->insert($teachers);
        }
    }
}