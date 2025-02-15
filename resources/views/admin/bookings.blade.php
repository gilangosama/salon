<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Konfirmasi Booking</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
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
    @include('sweetalert::alert')

    <div class="w-full px-4 py-8">
        <div class="flex justify-between">
            <div class="flex space-x-4">
                <div class="relative">
                    <input type="text" id="search" class="w-72 px-4 py-2 border border-gray-200 rounded-lg" placeholder="Cari...">
                    <button class="absolute right-0 top-0 bottom-0 px-3 py-2 bg-gray-200 rounded-r-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M14.293 15.707a1 1 0 01-1.414 0l-3.586-3.586a7 7 0 111.414-1.414l3.586 3.586a1 1 0 010 1.414zM9 15a6 6 0 100-12 6 6 0 000 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <select id="filter-status" class="px-4 py-2 border border-gray-200 rounded-lg">
                    <option value="all">Semua Status</option>
                    <option value="pending">Pending</option>
                    <option value="confirmed">Confirmed</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>
        </div>
    
        <div id="table-container">
            @include('admin.table', ['bookings' => $bookings])
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
    $(document).ready(function() {
        function fetchBookings() {
            let search = $('#search').val();
            let status = $('#filter-status').val();
    
            $.ajax({
                url: '{{ route("booking.search") }}',
                type: 'GET',
                data: { search: search, status: status },
                success: function(response) {
                    $('#table-container').html(response.html);
                }
            });
        }
    
        $('#search').on('keyup', function() {
            fetchBookings();
        });
    
        $('#filter-status').on('change', function() {
            fetchBookings();
        });
    });
    </script>
</body>

</html>
