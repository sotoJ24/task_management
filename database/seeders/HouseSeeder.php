<?php

namespace Database\Seeders; 

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\House; 

class HouseSeeder extends Seeder
{ 
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $houses = [
            [
                'house_name' => 'Villa José Manuel',
                'description' => 'Capacity of 16 persons',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

             [
                'house_name' => 'Volcano Sunrise',
                'description' => 'Capacity of 6 persons',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Villas del Rio',
                'description' => 'Capacity of 8 persons',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Sloth House',
                'description' => 'Within Condomiun trapiche',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], 

            [
                'house_name' => 'A home to dream',
                'description' => 'Private parking',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
            [
                'house_name' => 'Cabaña dorada',
                'description' => 'Capacity of 10 people',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Cozy Home',
                'description' => 'Private pool and park',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Dulce Hogar de Perezosos',
                'description' => 'Capacity of 10 persons',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Esencial',
                'description' => 'Volcano View',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Green Paradise',
                'description' => 'Capacity of 11 persons and lake included',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Green Treasure',
                'description' => 'Capacity 6 people',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Green View',
                'description' => 'Capacity of 6 persons and BBQ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],

            [
                'house_name' => 'Chill',
                'description' => 'Outside from trapiche and finca zone',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Retreat',
                'description' => 'Within Condomiun trapiche',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],


            [
                'house_name' => 'Little Creek',
                'description' => 'Capacity of 8 persons',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Love Arenal Chalet',
                'description' => 'Capacity of 4 persons',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Majestic Arenal House',
                'description' => 'Capacity of 8 persons',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],


            [
                'house_name' => 'Secret Garden',
                'description' => 'In the zone of Chachagua',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Serenity',
                'description' => 'Volcano View',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Sweet Home',
                'description' => 'Capacity of 11 people',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Villa Encanto',
                'description' => 'Within Condomiun trapiche, capacity of 20 people',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Villa Sunset',
                'description' => 'Capacity of 16 persons and BBQ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Villa Trapiche Arenal',
                'description' => 'Within Condomiun trapiche',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Villa Alma de fuego',
                'description' => 'Capacity of 6 people',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Volcano Arenal Chalet',
                'description' => 'Capacity of 10 people',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'house_name' => 'Vulcan House',
                'description' => 'Capacity of 10 people',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        ];

        House::insert($houses);
    }

}
