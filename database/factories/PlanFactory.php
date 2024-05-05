<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    protected $model = Plan::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->sentence(2),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'messages' => $this->faker->numberBetween(500, 2000),
            'textwords' => true,
            'rollover' => true,
            'contacts' => true,
        ];
    }
}
