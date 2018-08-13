<?php

use App\Farming;
use App\Tractor;
use App\Field;
use Illuminate\Database\Seeder;

class FarmingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Farming::truncate();

        foreach (range(1, 20) as $index) {
            Farming::create([
                'tractor_id' => $this->getRandomItemId('App\Tractor'),
                'field_id' => $this->getRandomItemId('App\Field'),
                'farming_area' => $faker->numberBetween(1, 10),
                'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);
        }
    }

    private function getRandomItemId($table)
    {
        $item = $table::inRandomOrder()->first();
        return $item->id;
    }
}
