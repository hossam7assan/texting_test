<?php

namespace Database\Factories;

use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    protected $model = Subscription::class;
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $plan = Plan::inRandomOrder()->first();
        return [
            'user_id' => $user->id,
            'plan_id' => $plan->id,
            'start_at' => now(),
            'end_at' => Carbon::now()->addMonths(1),
            'payment_id' => null,
            'status' => true,
        ];
    }
}
