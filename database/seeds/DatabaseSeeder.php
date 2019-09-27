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
        // $this->call(LevelTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(FatherTableSeeder::class);
        $this->call(MissionsTableSeeder::class);
    }
}
