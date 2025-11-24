<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — PARC Foundation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">

    <!-- Logo -->
    <div class="flex flex-col items-center mb-4">
        <img src="{{ asset('./assets/logo/logo.png') }}" alt="PARC Logo" class="w-25 h-25 object-contain mb-2">
    </div>

    <h2 class="text-2xl font-bold text-center mb-6">PARC Foundation</h2>

    {{-- Email --}}
    <div class="mb-4">
        <label class="block text-sm font-medium">Email</label>
        <input type="email" class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-orange-500" placeholder="Email">
    </div>

    {{-- Password --}}
    <div class="mb-4">
        <label class="block text-sm font-medium">Password</label>
        <input type="password" class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-orange-500" placeholder="********">
    </div>

    {{-- Login Button --}}
    <button class="w-full bg-orange-600 hover:bg-yellow-700 text-white py-3 rounded-lg font-medium">
        Login
    </button>

</div>

</body>
</html>