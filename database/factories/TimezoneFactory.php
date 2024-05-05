<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TimeZone;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timezone>
 */
class TimezoneFactory extends Factory
{
    protected $model = TimeZone::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->timezone,
            'country_id' => function () {
                return \App\Models\Country::inRandomOrder()->first()->id;
            },
        ];
    }
}
