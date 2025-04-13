<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            font-size: 24px;
            color: #4f46e5;
            margin-bottom: 20px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #4338ca;
        }

        .links {
            margin-top: 10px;
            text-align: center;
        }

        .links a {
            color: #4f46e5;
            text-decoration: none;
            font-size: 14px;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form id="loginForm" method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
            </div>
            <div>
                <button type="submit">Log In</button>
            </div>
        </form>
        <div class="links">
            <a href="{{ route('register') }}">Don't have an account? Register</a>
        </div>
    </div>
</body>

</html>


{{-- <x-guest-layout>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center">
        <div class="max-w-md w-full p-8 bg-white shadow-lg rounded-lg border border-gray-200">
            <h1 class="text-3xl font-bold text-center text-indigo-700 mb-6">Welcome Back!</h1>
            <p class="text-sm text-gray-500 text-center mb-8">
                Please log in to continue. Don't have an account?
                <a href="{{ route('register') }}" class="text-indigo-600 font-semibold hover:underline">Sign up</a>.
            </p>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-6">
                    <x-input-label for="email" :value="__('Email Address')" class="text-gray-700 font-medium" />
                    <x-text-input id="email"
                        class="block mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                        placeholder="Enter your email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />
                    <x-text-input id="password"
                        class="block mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        type="password" name="password" required autocomplete="current-password"
                        placeholder="Enter your password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-6">
                    <label for="remember_me" class="inline-flex items-center text-sm text-gray-600">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ml-2">{{ __('Remember Me') }}</span>
                    </label>
                </div>

                <!-- Forgot Password -->
                <div class="flex items-center justify-end mb-6">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <!-- Login Button -->
                <div class="mb-4">
                    <x-primary-button
                        class="w-full py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg">
                        {{ __('Log In') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout> --}}
