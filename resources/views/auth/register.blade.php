<x-guest-layout>
    <!-- Tombol Kembali -->
    <a href="/" class="inline-flex items-center text-gray-500 hover:text-gray-700 mb-6">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali
    </a>

    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-900">Buat Akun Baru</h2>
        <p class="mt-2 text-gray-600">Daftar untuk mendapatkan layanan terbaik</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-6">
            <x-input-label for="name" :value="__('Nama Lengkap')" class="text-gray-700" />
            <x-text-input id="name" class="block mt-2 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
            <x-text-input id="email" class="block mt-2 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
            <x-text-input id="password" class="block mt-2 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-6">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" class="text-gray-700" />
            <x-text-input id="password_confirmation" class="block mt-2 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mb-6">
            <x-primary-button class="w-full justify-center py-3 bg-indigo-600 hover:bg-indigo-700">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>

        <p class="text-center text-sm text-gray-600">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
                Masuk sekarang
            </a>
        </p>
    </form>
</x-guest-layout>
