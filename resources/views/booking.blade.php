<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking - Beauty Salon</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 bg-white border-b border-gray-100 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="text-2xl font-bold text-indigo-600">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Spacer untuk fixed navbar -->
    <div class="h-16"></div>

    <!-- Booking Form Section -->
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-lg p-6 md:p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Booking Layanan</h2>
                <p class="mt-2 text-gray-600">Isi form di bawah untuk melakukan reservasi</p>
            </div>

            <form action="/booking/store" method="POST" class="space-y-6">
                @csrf
                <!-- Nama -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" name="name" id="name" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <!-- No. Telepon -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">No. Telepon (WhatsApp)</label>
                    <input type="tel" name="phone" id="phone" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <!-- Layanan -->
                <div>
                    <label for="service" class="block text-sm font-medium text-gray-700">Pilih Layanan</label>
                    <select name="service" id="service" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">Pilih layanan...</option>
                        <option value="hair">Perawatan Rambut</option>
                        <option value="facial">Facial Treatment</option>
                        <option value="body">Body Treatment</option>
                        <option value="nail">Nail Art & Care</option>
                        <option value="makeup">Make Up</option>
                    </select>
                </div>

                <!-- Tanggal -->
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700">Tanggal Booking</label>
                    <input type="date" name="date" id="date" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <!-- Waktu -->
                <div>
                    <label for="time" class="block text-sm font-medium text-gray-700">Waktu</label>
                    <select name="time" id="time" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">Pilih waktu...</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                    </select>
                </div>

                <!-- Catatan -->
                <div>
                    <label for="notes" class="block text-sm font-medium text-gray-700">Catatan Tambahan (Opsional)</label>
                    <textarea name="notes" id="notes" rows="3" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" 
                        class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        Konfirmasi Booking
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </button>
                </div>
            </form>

            <!-- Info Box -->
            <div class="mt-8 bg-indigo-50 rounded-lg p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-indigo-800">Informasi Booking</h3>
                        <div class="mt-2 text-sm text-indigo-700">
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Konfirmasi booking akan dikirim melalui WhatsApp dan email</li>
                                <li>Harap datang 10 menit sebelum jadwal yang ditentukan</li>
                                <li>Pembatalan dapat dilakukan maksimal 24 jam sebelum jadwal</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-500 text-sm">
                © 2024 Beauty Salon. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html> 