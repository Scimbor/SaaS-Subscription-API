<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::factory()->create([
            'name' => 'Basic',
            'slug' => 'basic',
            'price' => 0,
            'currency' => 'PLN',
            'interval' => 'monthly',
        ]);

        Plan::factory()->create([
            'name' => 'Pro',
            'slug' => 'pro',
            'price' => 4900,
            'currency' => 'PLN',
            'interval' => 'monthly',
        ]);
    }
}
