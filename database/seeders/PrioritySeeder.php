<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Priority;

class PrioritySeeder extends Seeder
{
    /* ॐ *
     * Run the database seeds.
     */
    public function run(): void
    {
        $priorities = [
            [
                'priority_name' => 'High priority',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'priority_name' => 'Medium priority',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'priority_name' => 'Low priority',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Priority::insert($priorities);
    }
}
