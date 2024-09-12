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
        $this->call(RoleSeeder::class);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'remember_token' => null,
        ])->assignRole('admin');

        User::factory()->create([
            'name' => 'test',
            'email' => 'test@test.com',
            'remember_token' => null,
        ])->assignRole('user');
    }
}
