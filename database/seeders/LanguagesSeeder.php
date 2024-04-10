<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create(
            [
                "description" => "Italiano"
            ]
        );
        Language::create(
            [
                "description" => "English"
            ]
        );
    }
}
