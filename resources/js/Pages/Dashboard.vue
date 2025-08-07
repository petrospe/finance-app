<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue'
import axios from 'axios'

const selectedDate = ref(new Date().toISOString().slice(0, 10)) // 'YYYY-MM-DD'
const rangeType = ref('day')
const balance = ref(null)

const loadBalance = async () => {
  try {
    const response = await axios.get('/dashboard/balance', {
      params: {
        date: selectedDate.value,
        range: rangeType.value,
      },
    })
    balance.value = response.data
  } catch (error) {
    console.error('Failed to load balance:', error)
  }
}

const formatAmount = (amount) => {
  return parseFloat(amount).toFixed(2)
}
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
                <h2 class="text-xl font-semibold text-gray-800 mb-4">💰 Balance</h2>

                <div class="flex flex-col sm:flex-row sm:items-end sm:space-x-4 space-y-4 sm:space-y-0 mb-6">
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Select Date</label>
                    <input
                    type="date"
                    v-model="selectedDate"
                    class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring focus:ring-indigo-200 focus:outline-none"
                    />
                </div>

                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Range Type</label>
                    <select
                    v-model="rangeType"
                    class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring focus:ring-indigo-200 focus:outline-none"
                    >
                    <option value="day">Day</option>
                    <option value="week">Week</option>
                    <option value="month">Month</option>
                    </select>
                </div>

                <button
                    @click="loadBalance"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition"
                >
                    Load
                </button>
                </div>

                <div v-if="balance" class="space-y-2 text-sm text-gray-700">
                <div class="flex justify-between">
                    <span class="font-medium">Incomes:</span>
                    <span class="text-green-600">€{{ formatAmount(balance.total_incomes) }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium">Expenses:</span>
                    <span class="text-red-600">€{{ formatAmount(balance.total_expenses) }}</span>
                </div>
                <div class="flex justify-between border-t pt-2 font-semibold text-lg">
                    <span>Total Balance:</span>
                    <span :class="balance.balance >= 0 ? 'text-green-700' : 'text-red-700'">
                    €{{ formatAmount(balance.balance) }}
                    </span>
                </div>
                </div>
            </div>

            <!-- Status Message -->
            <div class="bg-green-50 border-l-4 border-green-400 text-green-700 p-4 rounded-md shadow-sm">
                ✅ You're successfully logged in!
            </div>
        </div>
    </AuthenticatedLayout>
</template>
