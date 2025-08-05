<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-10 px-4 sm:px-6 lg:px-8 space-y-8 max-w-7xl mx-auto">
            <!-- Page Title -->
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900">📊 Dashboard Overview</h1>
                <p class="mt-2 text-sm text-gray-500">
                    Welcome back! Here’s what’s happening with your finances today.
                </p>
            </div>

            <!-- Net Balance Card -->
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Today's Net Balance</h2>
                <p class="text-gray-600">
                    This will display today's net balance (income − expenses).
                </p>
            </div>

            <!-- Status Message -->
            <div class="bg-green-50 border-l-4 border-green-400 text-green-700 p-4 rounded-md shadow-sm">
                ✅ You're successfully logged in!
            </div>
        </div>
    </AuthenticatedLayout>
</template>
