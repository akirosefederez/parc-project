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

    @if($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('status'))
        <div class="mb-4 text-green-600">{{ session('status') }}</div>
    @endif

    <form action="{{ route('login.post') }}" method="POST">
        @csrf

        {{-- Email --}}
        <div class="mb-4">
            <label class="block text-sm font-medium">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-orange-500" placeholder="Email">
        </div>

        {{-- Password --}}
        <div class="mb-4">
            <label class="block text-sm font-medium">Password</label>
            <input type="password" name="password" required class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-orange-500" placeholder="********">
        </div>

        <div class="mb-4 flex items-center justify-between text-sm">
            <label class="inline-flex items-center">
                <input type="checkbox" name="remember" class="mr-2"> Remember me
            </label>
            <a href="#" class="text-orange-600">Forgot password?</a>
        </div>

        {{-- Login Button --}}
        <button type="submit" class="w-full bg-orange-600 hover:bg-yellow-700 text-white py-3 rounded-lg font-medium">
            Login
        </button>
    </form>

</div>

</body>
</html>