<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                "userName" => "admin",
                "password" => "pass",
                "roleId" => 1,
                "name" => "michele",
                "lastName" => "iacuitto",
                "email" => "email@gmail.com",
                "credits" => 0,
                "languageId" => 1
            ]
        );
    }
}
