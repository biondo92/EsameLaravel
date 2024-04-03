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
                "translationId" => 1,
                "languageId" => 1,
                "title" => "Administrator"
            ]
        );

        translations::create(
            [
                "translationId" => 1,
                "languageId" => 2,
                "title" => "Amministratore"
            ]
        );

        translations::create(
            [
                "translationId" => 2,
                "languageId" => 1,
                "title" => "User"
            ]
        );

        translations::create(
            [
                "translationId" => 2,
                "languageId" => 2,
                "title" => "Utente"
            ]
        );

        translations::create(
            [
                "translationId" => 3,
                "languageId" => 1,
                "title" => "Guest"
            ]
        );

        translations::create(
            [
                "translationId" => 3,
                "languageId" => 2,
                "title" => "Ospite"
            ]
        );

        translations::create(
            [
                "translationId" => 4,
                "languageId" => 1,
                "title" => "Action"
            ]
        );
        translations::create(
            [
                "translationId" => 4,
                "languageId" => 2,
                "title" => "Azione"
            ]
        );
    }
}
