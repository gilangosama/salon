<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Konfirmasi Booking</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    <!-- Navbar -->
    <nav class="bg-white border-b">
        <div class="w-full px-4">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <h1 class="text-2xl font-bold text-indigo-600">Admin Panel</h1>
                </div>
                <div class="flex items-center">
                    <button class="text-gray-500 hover:text-gray-700">Logout</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="w-full px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900">Daftar Booking</h2>
            <select class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <option>Semua Status</option>
                <option>Pending</option>
                <option>Dikonfirmasi</option>
                <option>Selesai</option>
            </select>
        </div>

        <!-- Booking Table -->
        <div class="w-full bg-white">
            <table class="w-full">
                <thead>
                    <tr class="border-b bg-gray-50">
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">Pelanggan</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">Layanan</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">Tanggal & Waktu</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/8">Status</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/8">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <!-- Booking Item 1 -->
                    <tr>
                        <td class="px-4 py-4">
                            <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                            <div class="text-sm text-gray-500">sarah@example.com</div>
                            <div class="text-sm text-gray-500">+62 812-3456-7890</div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="text-sm text-gray-900">Hair Treatment</div>
                            <div class="text-sm text-gray-500">Potong rambut model layer</div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="text-sm text-gray-900">15 Feb 2024</div>
                            <div class="text-sm text-gray-500">10:00</div>
                        </td>
                        <td class="px-4 py-4">
                            <span class="text-sm text-yellow-600 font-medium">Pending</span>
                        </td>
                        <td class="px-4 py-4 space-x-3">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 text-sm">Konfirmasi</a>
                            <a href="#" class="text-red-600 hover:text-red-900 text-sm">Tolak</a>
                        </td>
                    </tr>

                    <!-- Booking Item 2 -->
                    <tr>
                        <td class="px-4 py-4">
                            <div class="text-sm font-medium text-gray-900">Michael Chen</div>
                            <div class="text-sm text-gray-500">michael@example.com</div>
                            <div class="text-sm text-gray-500">+62 813-9876-5432</div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="text-sm text-gray-900">Facial Treatment</div>
                            <div class="text-sm text-gray-500">Basic facial dengan masker gold</div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="text-sm text-gray-900">15 Feb 2024</div>
                            <div class="text-sm text-gray-500">13:00</div>
                        </td>
                        <td class="px-4 py-4">
                            <span class="text-sm text-green-600 font-medium">Dikonfirmasi</span>
                        </td>
                        <td class="px-4 py-4">
                            <a href="#" class="text-gray-600 hover:text-gray-900 text-sm">Selesai</a>
                        </td>
                    </tr>

                    <!-- Booking Item 3 -->
                    <tr>
                        <td class="px-4 py-4">
                            <div class="text-sm font-medium text-gray-900">Lisa Anderson</div>
                            <div class="text-sm text-gray-500">lisa@example.com</div>
                            <div class="text-sm text-gray-500">+62 815-1234-5678</div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="text-sm text-gray-900">Nail Art</div>
                            <div class="text-sm text-gray-500">French manicure dengan nail art</div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="text-sm text-gray-900">14 Feb 2024</div>
                            <div class="text-sm text-gray-500">15:00</div>
                        </td>
                        <td class="px-4 py-4">
                            <span class="text-sm text-gray-600 font-medium">Selesai</span>
                        </td>
                        <td class="px-4 py-4">-</td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="px-4 py-3 border-t">
                <div class="flex justify-between items-center">
                    <p class="text-sm text-gray-700">Menampilkan 1-3 dari 3 hasil</p>
                    <div class="flex gap-2">
                        <button class="px-3 py-1 border rounded text-sm text-gray-600">Previous</button>
                        <button class="px-3 py-1 border rounded text-sm bg-indigo-50 text-indigo-600">1</button>
                        <button class="px-3 py-1 border rounded text-sm text-gray-600">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 