<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(
            [
                "traslationId" => 1
            ]
        );

        Role::create(
            [
                "traslationId" => 2
            ]
        );

        Role::create(
            [
                "traslationId" => 3
            ]
        );
    }
}