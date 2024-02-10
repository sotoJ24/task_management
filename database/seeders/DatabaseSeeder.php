<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /* ॐ *
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PrioritySeeder::class);
        $this->call(HouseSeeder::class);
    }
}
