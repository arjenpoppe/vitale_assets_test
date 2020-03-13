<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asset::truncate();

        $faker = Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 100000; $i++) {
            Asset::create([
                'name' => $faker->name,
                'description' => Str::random(50),
                'category_id' => random_int(1,10),
                'geometry_type' => Str::random(50),
                'geometry_coordinates' => Str::random(10),
                'threshold' => Str::random(20),
                'threshold_correction' => 234234.5,
            ]);
        }
    }
}
