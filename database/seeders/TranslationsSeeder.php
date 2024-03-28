<?php

namespace Database\Seeders;

use App\Models\Translations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Translations::create(
            [
                "translationId" => 1,
                "languageId" => 1,
                "title" => "Administrator"
            ]
        );

        Translations::create(
            [
                "translationId" => 1,
                "languageId" => 2,
                "title" => "Amministratore"
            ]
        );

        Translations::create(
            [
                "translationId" => 2,
                "languageId" => 1,
                "title" => "User"
            ]
        );

        Translations::create(
            [
                "translationId" => 2,
                "languageId" => 2,
                "title" => "Utente"
            ]
        );

        Translations::create(
            [
                "translationId" => 3,
                "languageId" => 1,
                "title" => "Guest"
            ]
        );

        Translations::create(
            [
                "translationId" => 3,
                "languageId" => 2,
                "title" => "Ospite"
            ]
        );
    }
}
