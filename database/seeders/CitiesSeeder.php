<?php

namespace Database\Seeders;

use App\Models\cities;
use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = storage_path("data/cities.csv");
        $file = fopen($csv, "r");
        while (($data = fgetcsv($file, 2000, ",")) !== false) {
            City::create(
                [

                    "name" => $data[0],

                ]
            );
        }
    }
}
