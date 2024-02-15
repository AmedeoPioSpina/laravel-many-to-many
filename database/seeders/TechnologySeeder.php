<?php

namespace Database\Seeders;

use App\Models\Admin\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $newTechnology = new Technology();
        $newTechnology->name = $faker->word();
        $newTechnology->save();
    }
}
