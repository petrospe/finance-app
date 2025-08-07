<script setup>
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
  import { Head } from '@inertiajs/vue3';
  import { ref } from 'vue'
  import { useForm } from '@inertiajs/vue3'
  import { router } from '@inertiajs/vue3'
  import { defineProps } from 'vue'

  const props = defineProps({ incomes: Array })

  const form = useForm({
    id: null,
    name: '',
    category: '',
    amount: '',
    date: '',
    notes: ''
  })

  const submit = () => {
    if (form.id) {
      form.post(route('incomes.update', form.id), {
        preserveScroll: true,
        onSuccess: () => form.reset()
      })
    } else {
      form.post(route('incomes.store'), {
        preserveScroll: true,
        onSuccess: () => form.reset()
      })
    }
  }

  const editIncome = (income) => {
    form.id = income.id
    form.name = income.name
    form.category = income.category
    form.amount = income.amount
    form.date = income.date
    form.notes = income.notes
  }

  const deleteIncome = (id) => {
    if (confirm('Are you sure?')) {
      router.delete(route('incomes.destroy', id))
    }
  }
</script>

<template>
  <Head title="Incomes" />
  <AuthenticatedLayout>
    <div class="max-w-4xl mx-auto py-8 space-y-10">
      <h1 class="text-2xl font-bold">Incomes</h1>

      <!-- Income Form -->
      <div class="bg-white p-6 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">{{ form.id ? 'Edit Income' : 'Add New Income' }}</h2>
        <form @submit.prevent="submit" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium mb-1">Name</label>
            <input v-model="form.name" type="text" class="input w-full" placeholder="e.g., Freelance Project" />
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Category</label>
            <input v-model="form.category" type="text" class="input w-full" placeholder="e.g., Consulting" />
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Amount</label>
            <input v-model="form.amount" type="number" step="0.01" class="input w-full" placeholder="e.g., 100.00" />
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Date</label>
            <input v-model="form.date" type="date" class="input w-full" />
          </div>

          <div class="sm:col-span-2">
            <label class="block text-sm font-medium mb-1">Notes</label>
            <input v-model="form.notes" type="text" class="input w-full" placeholder="Optional notes" />
          </div>

          <div class="sm:col-span-2">
            <button type="submit" class="btn">{{ form.id ? 'Update Income' : 'Create Income' }}</button>
          </div>
        </form>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full table-auto text-sm text-left border border-gray-200 bg-white shadow rounded">
          <thead class="bg-gray-100">
            <tr class="text-gray-700 uppercase text-xs tracking-wider">
              <th class="px-4 py-3">Name</th>
              <th class="px-4 py-3">Category</th>
              <th class="px-4 py-3">Amount</th>
              <th class="px-4 py-3">Date</th>
              <th class="px-4 py-3">Notes</th>
              <th class="px-4 py-3">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="income in incomes" :key="income.id" class="border-t">
              <td class="px-4 py-2">{{ income.name }}</td>
              <td class="px-4 py-2">{{ income.category }}</td>
              <td class="px-4 py-2">{{ income.amount }}</td>
              <td class="px-4 py-2">{{ income.date }}</td>
              <td class="px-4 py-2">{{ income.notes }}</td>
              <td class="px-4 py-2 space-x-2">
                <button @click="editIncome(income)" class="btn-sm text-blue-600">Edit</button>
                <button @click="deleteIncome(income.id)" class="btn-sm text-red-600">Delete</button>
              </td>
            </tr>
            <tr v-if="!incomes.length">
              <td colspan="6" class="px-4 py-4 text-center text-gray-500">No incomes found.</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </AuthenticatedLayout>
</template>

<style scoped>
.input {
  @apply border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500;
}
.btn {
  @apply px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition;
}
.btn-sm {
  @apply px-2 py-1 text-sm border border-gray-300 rounded hover:bg-gray-100;
}
</style>