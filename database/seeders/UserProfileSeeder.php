<?php

namespace Database\Seeders;

use App\Models\userProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        userProfile::create(
            [
                "userId" => 1,
                "name" => "michele",
                "lastName" => "iacuitto",
                "email" => "email@gmail.com",
                "credits" => 0,
                "languageId" => 2
            ]
        );
    }
}
