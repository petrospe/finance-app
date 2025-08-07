<script setup>
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
  import { Head } from '@inertiajs/vue3';
  import { ref } from 'vue'
  import { useForm } from '@inertiajs/vue3'
  import { router } from '@inertiajs/vue3'

  const props = defineProps({
    expenses: Array,
  })

  const form = useForm({
    id: null,
    name: '',
    category: '',
    amount: '',
    date: '',
    notes: '',
  })

  const editing = ref(false)

  function submit() {
    if (editing.value) {
      form.post(route('expenses.update', form.id), {
        preserveScroll: true,
        onSuccess: () => {
          editing.value = false
          form.reset()
        },
      })
    } else {
      form.post(route('expenses.store'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
      })
    }
  }

  function edit(expense) {
    form.id = expense.id
    form.name = expense.name
    form.category = expense.category
    form.amount = expense.amount
    form.date = expense.date
    form.notes = expense.notes
    editing.value = true
  }

  function destroy(id) {
    if (confirm('Delete this expense?')) {
      router.delete(route('expenses.destroy', id), {
        preserveScroll: true,
      })
    }
  }
</script>

<template>
  <Head title="Expenses" />
  <AuthenticatedLayout>
    <div class="max-w-4xl mx-auto py-8 space-y-6">
      <h1 class="text-2xl font-bold">Expenses</h1>

      <!-- Form -->
      <form @submit.prevent="submit" class="space-y-4 bg-white p-4 rounded shadow">
        <input v-model="form.name" type="text" placeholder="Name" class="input w-full" />
        <input v-model="form.category" type="text" placeholder="Category" class="input w-full" />
        <input v-model="form.amount" type="number" step="0.01" placeholder="Amount" class="input w-full" />
        <input v-model="form.date" type="date" class="input w-full" />
        <input v-model="form.notes" type="text" placeholder="Notes" class="input w-full" />
        <button type="submit" class="btn btn-primary">
          {{ editing ? 'Update' : 'Create' }}
        </button>
      </form>

      <!-- List -->
      <table class="w-full text-left border mt-6 bg-white shadow rounded">
        <thead>
          <tr class="bg-gray-100">
            <th class="p-2">Name</th>
            <th class="p-2">Category</th>
            <th class="p-2">Amount</th>
            <th class="p-2">Date</th>
            <th class="p-2">Notes</th>
            <th class="p-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="expense in props.expenses" :key="expense.id">
            <td class="p-2">{{ expense.name }}</td>
            <td class="p-2">{{ expense.category }}</td>
            <td class="p-2">{{ expense.amount }}</td>
            <td class="p-2">{{ expense.date }}</td>
            <td class="p-2">{{ expense.notes }}</td>
            <td class="p-2 space-x-2">
              <button @click="edit(expense)" class="btn btn-sm">✏️</button>
              <button @click="destroy(expense.id)" class="btn btn-sm text-red-600">🗑</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </AuthenticatedLayout>
</template>

<style scoped>
.input {
  @apply border border-gray-300 rounded px-3 py-2;
}
.btn {
  @apply px-3 py-1 bg-blue-600 text-white rounded;
}
.btn-sm {
  @apply px-2 py-1 text-sm bg-gray-200 rounded hover:bg-gray-300;
}
</style>