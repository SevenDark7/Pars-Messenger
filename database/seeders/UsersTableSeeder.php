<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()->admin()->create([
            'name' => 'John Doe',
            'email' => 'admin@example.net',
        ]);

        User::factory()->count(15)->create();
    }
}