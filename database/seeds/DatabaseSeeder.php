<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeded!');

        $this->call(UserRelationshipTableSeeder::class);
        $this->command->info('Follower table seeded!');
    }
}
