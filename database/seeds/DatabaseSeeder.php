<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unduard();
        $this->call(TasksTableSeeder::class);
        Model::reguard();
    }
}
