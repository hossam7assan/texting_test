<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create(['name' => 'USA' , 'code' => '+254']);
        Country::create(['name' => 'UK'  , 'code' => '+568']);
    }
}
