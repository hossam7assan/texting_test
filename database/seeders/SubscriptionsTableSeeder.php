<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $plans = Plan::all();

        foreach ($users as $user) {
            Subscription::create([
                'user_id' => $user->id,
                'plan_id' => $plans->random()->id,
                'start_at' => now(),
                'end_at' => Carbon::now()->addMonths(1),
                'payment_id' => null,
                'status' => true,
            ]);
        }
    }
}
