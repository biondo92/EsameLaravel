<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create(
            [
                "code" => "Auth",
                "key" => "MaxLoginAttemps",
                "value" => "5"
            ]
        );
        Setting::create(
            [
                "code" => "Auth",
                "key" => "SessionExpiration",
                "value" => "1800"
            ]
        );
    }
}
