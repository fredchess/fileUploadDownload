<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // \App\Models\User::factory(10)->create();
        foreach (range(1,15) as $index) {
            DB::table('fichiers')->insert([
                'name' => $faker->sentence(4),
                'type' => $faker->numberBetween(1, 4),
                'size' => $faker->randomFloat(2, 0, 100),
                'uploader' => $faker->name(),
                'filePath' => storage_path(),
                'associatedImagePath' => storage_path(),
                'created_at' => now()
            ]);
        }
    }
}
