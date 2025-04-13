<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <h1>Register</h1>
        <form id="registerForm" method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <input type="text" id="name" name="name" placeholder="Full Name" required
                    value="{{ old('name') }}">
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-sm" />
            </div>
            <div>
                <input type="email" id="email" name="email" placeholder="Email" required
                    value="{{ old('email') }}">
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
            </div>
            <div>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm Password" required>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-sm" />
            </div>
            <div>
                <button type="submit">Register</button>
            </div>
        </form>
        <div class="links">
            <a href="{{ route('login') }}">Already have an account? Login</a>
        </div>
    </div>
</body>

</html>



{{-- <x-guest-layout>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">{{ __('Register') }}</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name"
                    class="block mt-1 w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                    placeholder="Enter your full name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-sm" />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email"
                    class="block mt-1 w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    type="email" name="email" :value="old('email')" required autocomplete="username"
                    placeholder="Enter your email address" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password"
                    class="block mt-1 w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    type="password" name="password" required autocomplete="new-password"
                    placeholder="Create a password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation"
                    class="block mt-1 w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    type="password" name="password_confirmation" required autocomplete="new-password"
                    placeholder="Confirm your password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-sm" />
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mb-4">
                <a class="text-sm text-indigo-600 hover:text-indigo-800 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>

            <!-- Register Button -->
            <div class="flex items-center justify-between">
                <x-primary-button class="w-full py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg">
                    {{ __('Register') }}
                </x-primary-button>
            </div>

            <!-- Login Link -->
            <div class="mt-4 text-center">
                <p class="text-sm text-gray-600">
                    {{ __('Already have an account?') }}
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                        {{ __('Log in instead') }}
                    </a>
                </p>
            </div>
        </form>
    </div>
</x-guest-layout> --}}
