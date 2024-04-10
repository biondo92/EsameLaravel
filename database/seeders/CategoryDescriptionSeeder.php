<?php

namespace Database\Seeders;

use App\Models\CategoryDescription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryDescription::create(
            [
                "categoryId" => 1,
                "languageId" => 1,
                "description" => "azione"
            ],
            [
                "categoryId" => 1,
                "languageId" => 2,
                "description" => "action"
            ]
        );
    }
}
