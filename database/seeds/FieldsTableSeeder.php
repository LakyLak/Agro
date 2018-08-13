<?php

use App\Field;
use Illuminate\Database\Seeder;

class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // Field::truncate();

        foreach (range(1, 20) as $index) {
            Field::create([
                'name' => $faker->name,
                'culture' => $faker->word,
                'area' => $faker->numberBetween(10, 50),
            ]);
        }
    }
}
