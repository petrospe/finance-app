<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Company</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-icon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-2xl font-bold mb-6 text-center text-blue-700">Register Your Company</h1>
        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="/register-company" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Company (subdomain)</label>
                <input type="text" name="company" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="e.g. company1">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Email</label>
                <input type="email" name="email" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="admin@company.com">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Password</label>
                <input type="password" name="password" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Password">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Confirm Password">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition">Register Company</button>
        </form>
        @if($errors->any())
            <div class="mt-4 p-3 bg-red-100 text-red-800 rounded">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Go to Home button -->
        <div class="mt-6 text-center">
            <a href="/" 
            class="inline-flex items-center justify-center w-12 h-12 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition"
            title="Go to Home">
                <!-- Heroicon: Home -->
                <svg xmlns="http://www.w3.org/2000/svg" 
                    fill="none" viewBox="0 0 24 24" 
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M3 9.75L12 3l9 6.75M4.5 10.5V21h6v-6h3v6h6V10.5"/>
                </svg>
            </a>
        </div>
    </div>
</body>
</html>
