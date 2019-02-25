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
        //richiama il fine annesso
        $this->call(StudentsTableSeeder::class);
    }
}
