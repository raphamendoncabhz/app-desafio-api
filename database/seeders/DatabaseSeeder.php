<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         // Create admin user

        \App\Models\User::factory(1)->create(
        [
            'name' => 'ADMIN',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Client::factory(10)
        ->hasLicensePlates(2)
        ->create();
    }
}
