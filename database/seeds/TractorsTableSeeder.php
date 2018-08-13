<?php

use App\Tractor;
use Illuminate\Database\Seeder;

class TractorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // Tractor::truncate();

        foreach (range(1, 20) as $index) {
            Tractor::create([
                'name' => $faker->name,
            ]);
        }
    }
}
