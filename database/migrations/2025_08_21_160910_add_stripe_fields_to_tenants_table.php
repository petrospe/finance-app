<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tenants', function (Blueprint $table) {
            //
            $table->string('stripe_customer_id')->nullable()->after('id');
            $table->string('stripe_subscription_id')->nullable()->after('stripe_customer_id');
            $table->string('stripe_plan_id')->nullable()->after('stripe_subscription_id');
            $table->string('subscription_status')->default('trialing')->after('stripe_plan_id'); // trialing, active, canceled, past_due
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tenants', function (Blueprint $table) {
            //
            $table->dropColumn([
                'stripe_customer_id', 
                'stripe_subscription_id', 
                'stripe_plan_id',
                'subscription_status'
            ]);
        });
    }
};
