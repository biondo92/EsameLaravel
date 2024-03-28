<?php

namespace Database\Seeders;

use App\Models\languages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        languages::create(
            [
                "description" => "English"
            ]
        );

        languages::create(
            [
                "description" => "Italiano"
            ]
        );
    }
}
