<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:plans,id',
        ]);

        $user = $request->user();

        $plan = Plan::findOrFail($request->plan_id);

        $user->subscription()?->update(['status' => 'cancelled']);

        $subscription = new Subscription([
            'plan_id' => $plan->id,
            'status' => 'active',
            'starts_at' => now(),
            'ends_at' => Carbon::now()->addMonth(),
            'renewal_date' => Carbon::now()->addMonth(),
        ]);

        $user->subscription()->save($subscription);

        return response()->json(['message' => 'Subscribed successfully'], 201);
    }

    public function show(Request $request)
    {
        $subscription = $request->user()->subscription()->with('plan')->first();

        if (!$subscription) {
            return response()->json(['message' => 'No active subscription'], 404);
        }

        return response()->json($subscription);
    }
}
