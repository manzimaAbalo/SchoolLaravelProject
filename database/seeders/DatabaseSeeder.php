<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use SectorTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategoryRuleTableSeeder::class);
        $this->call(SectorTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        // $this->call(SchoolTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
