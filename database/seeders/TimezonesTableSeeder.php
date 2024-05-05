<?php

namespace Database\Seeders;

use App\Models\TimeZone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimezonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usaTimezones = [
            'America/New_York',
            'America/Chicago',
            'America/Denver',
            'America/Phoenix',
            'America/Los_Angeles',
            'America/Anchorage',
            'America/Adak',
            'Pacific/Honolulu'
        ];

        $usaCountryId = \App\Models\Country::where('name', 'USA')->value('id');
        foreach ($usaTimezones as $timezone) {
            TimeZone::create(['name' => $timezone, 'country_id' => $usaCountryId]);
        }

        $ukCountryId = \App\Models\Country::where('name', 'UK')->value('id');
        Timezone::create(['name' => 'Europe/London', 'country_id' => $ukCountryId]);

    }
}
