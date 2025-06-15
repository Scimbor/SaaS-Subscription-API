<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'subscriptions_plans';

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }
}
