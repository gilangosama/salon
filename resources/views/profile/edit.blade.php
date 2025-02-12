<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Beauty Salon</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="relative p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <!-- Tombol Kembali -->
                <a href="/" class="inline-flex items-center text-gray-500 hover:text-gray-700 mb-6">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali
                </a>

                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Profile Information') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Update your account's profile information and email address.") }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'profile-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            
            {{-- hasil booking --}}

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

            {{-- Hasil Booking Section --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mt-6">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                Riwayat Booking
                            </h2>
                            <p class="mt-1 text-sm text-gray-600">
                                Daftar booking yang telah Anda lakukan.
                            </p>
                        </header>

                        <div class="mt-6">
                            <!-- Contoh Booking List -->
                            <div class="space-y-4">
                                <!-- Booking Item 1 -->
                                <div class="border rounded-lg p-4 hover:bg-gray-50">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h3 class="font-medium text-gray-900">Hair Treatment</h3>
                                            <div class="mt-1 text-sm text-gray-600 space-y-1">
                                                <p>Tanggal: 15 Feb 2024</p>
                                                <p>Waktu: 10:00</p>
                                                <p class="text-gray-500">Catatan: Potong rambut model layer</p>
                                            </div>
                                        </div>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            Upcoming
                                        </span>
                                    </div>
                                    <div class="mt-4 flex items-center justify-end space-x-4">
                                        <button class="text-sm text-red-600 hover:text-red-800">
                                            Batalkan Booking
                                        </button>
                                        <button class="text-sm text-indigo-600 hover:text-indigo-800">
                                            Reschedule
                                        </button>
                                    </div>
                                </div>

                                <!-- Booking Item 2 -->
                                <div class="border rounded-lg p-4 hover:bg-gray-50">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h3 class="font-medium text-gray-900">Facial Treatment</h3>
                                            <div class="mt-1 text-sm text-gray-600 space-y-1">
                                                <p>Tanggal: 10 Feb 2024</p>
                                                <p>Waktu: 14:00</p>
                                            </div>
                                        </div>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Completed
                                        </span>
                                    </div>
                                </div>

                                <!-- Booking Item 3 -->
                                <div class="border rounded-lg p-4 hover:bg-gray-50">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h3 class="font-medium text-gray-900">Nail Art</h3>
                                            <div class="mt-1 text-sm text-gray-600 space-y-1">
                                                <p>Tanggal: 5 Feb 2024</p>
                                                <p>Waktu: 16:00</p>
                                                <p class="text-gray-500">Catatan: French manicure</p>
                                            </div>
                                        </div>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Completed
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination Example -->
                            <div class="mt-6 flex items-center justify-center">
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        Previous
                                    </a>
                                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                        1
                                    </a>
                                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                        2
                                    </a>
                                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        Next
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
