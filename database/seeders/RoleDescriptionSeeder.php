<?php

namespace Database\Seeders;

use App\Models\RoleDescription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoleDescription::create(
            [
                "roleId" => 1,
                "languageId" => 1,
                "description" => "amministratore"
            ],
            [
                "roleId" => 1,
                "languageId" => 2,
                "description" => "admin"
            ],
            [
                "roleId" => 2,
                "languageId" => 1,
                "description" => "utente"
            ],
            [
                "roleId" => 2,
                "languageId" => 2,
                "description" => "user"
            ],
            [
                "roleId" => 3,
                "languageId" => 1,
                "description" => "ospite"
            ],
            [
                "roleId" => 3,
                "languageId" => 2,
                "description" => "guest"
            ]

        );
    }
}
