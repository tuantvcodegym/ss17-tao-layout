<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;
        for($i=0; $i<10; $i++){
            DB::table('list')->insert([
               'category' => $faker->category
            ]);
        }
    }
}
