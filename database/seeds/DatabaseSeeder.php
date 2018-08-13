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
        $this->call(TractorsTableSeeder::class);
        $this->call(FieldsTableSeeder::class);
        $this->call(FarmingsTableSeeder::class);
    }
}
