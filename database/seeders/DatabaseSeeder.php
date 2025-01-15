<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * The main admin account we create.
     */
    const Admin = [
        'name' => 'مهدی عابدی',
        'email' => 'abedi@mehdi.ir',
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ThreadsTableSeeder::class,
            MessagesTableSeeder::class,
            FriendsTableSeeder::class,
            BotSeeder::class,
        ]);
    }
}
