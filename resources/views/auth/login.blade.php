<x-guest-layout>
    <!-- Tombol Kembali -->
    <a href="/" class="inline-flex items-center text-gray-500 hover:text-gray-700 mb-6">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali
    </a>

    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-900">Selamat Datang</h2>
        <p class="mt-2 text-gray-600">Silakan masuk ke akun Anda</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
            <x-text-input id="email" class="block mt-2 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
            <x-text-input id="password" class="block mt-2 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mb-6">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-indigo-600 hover:text-indigo-800" href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>
            @endif
        </div>

        <div class="mb-6">
            <x-primary-button class="w-full justify-center py-3 bg-indigo-600 hover:bg-indigo-700">
                {{ __('Masuk') }}
            </x-primary-button>
        </div>

        <p class="text-center text-sm text-gray-600">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
                Daftar sekarang
            </a>
        </p>
    </form>
</x-guest-layout>
