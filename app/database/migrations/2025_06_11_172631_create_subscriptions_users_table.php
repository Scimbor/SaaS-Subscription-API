<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscriptions_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained(); 
            $table->foreignId('plan_id')->constrained('subscriptions_plans')->onDelete('cascade');
            $table->string('status');
            $table->timestamp('starts_at');
            $table->timestamp('ends_at');
            $table->timestamp('renewal_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions_users');
    }
};
