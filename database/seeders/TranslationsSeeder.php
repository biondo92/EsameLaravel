<?php

namespace Database\Seeders;

use App\Models\translations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class translationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        translations::create(
            [
                "entityId" => 1,
                "languageId" => 1,
                "title" => "Administrator"
            ]
        );

        translations::create(
            [
                "entityId" => 1,
                "languageId" => 2,
                "title" => "Amministratore"
            ]
        );

        translations::create(
            [
                "entityId" => 2,
                "languageId" => 1,
                "title" => "User"
            ]
        );

        translations::create(
            [
                "entityId" => 2,
                "languageId" => 2,
                "title" => "Utente"
            ]
        );

        translations::create(
            [
                "entityId" => 3,
                "languageId" => 1,
                "title" => "Guest"
            ]
        );

        translations::create(
            [
                "entityId" => 3,
                "languageId" => 2,
                "title" => "Ospite"
            ]
        );

        translations::create(
            [
                "entityId" => 4,
                "languageId" => 1,
                "title" => "Action"
            ]
        );
        translations::create(
            [
                "entityId" => 4,
                "languageId" => 2,
                "title" => "Azione"
            ]
        );
    }
}
