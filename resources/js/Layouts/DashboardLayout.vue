<template>
  <div class="min-h-screen flex flex-col">
    <header class="bg-gray-800 text-white p-4">
      <h1 class="text-xl font-bold">💰 Finance Dashboard</h1>
    </header>

    <div class="flex flex-1">
      <aside class="w-64 bg-gray-100 p-4">
        <nav class="space-y-2">
          <RouterLink to="/dashboard" class="block text-gray-700 hover:underline">📊 Overview</RouterLink>
          <RouterLink to="/expenses" class="block text-gray-700 hover:underline">💸 Expenses</RouterLink>
          <RouterLink to="/incomes" class="block text-gray-700 hover:underline">💵 Incomes</RouterLink>
        </nav>
      </aside>

      <main class="flex-1 p-6 bg-white">
        <RouterView />
      </main>
    </div>

    <footer class="bg-gray-800 text-white text-center py-2">
      &copy; {{ new Date().getFullYear() }} Finance App
    </footer>
  </div>
</template>
