<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'The Pluto',
            'price' => 29,
            'messages' => 500,
            'textwords' => 5,
            'rollover' => true,
            'contacts' => true,
        ]);

        Plan::create([
            'name' => 'The Mercury',
            'price' => 49,
            'messages' => 1000,
            'textwords' => 5,
            'rollover' => true,
            'contacts' => true,
        ]);

        Plan::create([
            'name' => 'The Venus',
            'price' => 79,
            'messages' => 2000,
            'textwords' => 5,
            'rollover' => true,
            'contacts' => true,
        ]);
    }
}
