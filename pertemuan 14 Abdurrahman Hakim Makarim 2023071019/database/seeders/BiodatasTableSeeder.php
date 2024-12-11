<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('biodatas')->insert([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'gender' => 'male',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
           'first_name' => 'Jane',
            'last_name' => 'Smith',
            'gender' => 'female',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
       
    }
}
