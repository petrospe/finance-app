<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
use Illuminate\Support\Facades\Log;

class StripeWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $payload = $request->all();
        $event = $payload['type'] ?? null;
        $data = $payload['data']['object'] ?? [];

        if (!$event || !$data) {
            return response()->json(['status' => 'ignored'], 200);
        }

        // Find tenant by stripe_customer_id
        $tenant = Tenant::where('stripe_customer_id', $data['customer'] ?? '')->first();
        if (!$tenant) {
            Log::warning('Stripe webhook received but tenant not found', $payload);
            return response()->json(['status' => 'tenant_not_found'], 404);
        }

        switch ($event) {
            case 'customer.subscription.created':
            case 'customer.subscription.updated':
                $tenant->update([
                    'stripe_subscription_id' => $data['id'] ?? $tenant->stripe_subscription_id,
                    'stripe_plan_id'         => $data['plan']['id'] ?? $tenant->stripe_plan_id,
                    'subscription_status'    => $data['status'] ?? $tenant->subscription_status,
                ]);
                break;

            case 'customer.subscription.deleted':
                $tenant->update([
                    'subscription_status' => 'canceled',
                ]);
                break;
        }

        return response()->json(['status' => 'success'], 200);
    }
}
