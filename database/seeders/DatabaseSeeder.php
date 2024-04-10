<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(
            [
                LanguagesSeeder::class,
                CitiesSeeder::class,
                Roles::class,
                CategoriesSeeder::class,
                RoleDescriptionSeeder::class,
                CategoryDescriptionSeeder::class,
                UserSeeder::class,
                AddressSeeder::class,
                UsersAddressesSeeder::class,

            ]
        );
    }
}
