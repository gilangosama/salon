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
            @foreach ($bookings as $booking)
                <div class="border rounded-lg p-4 hover:bg-gray-50">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="font-medium text-gray-900">{{ $booking->service }}</h3>
                            <div class="mt-1 text-sm text-gray-600 space-y-1">
                                <p>{{ $booking->date }}</p>
                                <p>{{ $booking->time }}</p>
                                <p class="text-gray-500">{{ $booking->notes }}</p>
                            </div>
                        </div>
                        
                            @if ($booking->status == 'pending')
                            <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Pending</span>
                            @elseif ($booking->status == 'approved')
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Approved</span>
                            @elseif ($booking->status == 'rejected')
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Rejected</span>
                            @endif
                        
                    </div>
                    @if ($booking->status == 'pending')
                    <div class="mt-4 flex items-center justify-end space-x-4">
                        <form action="{{ route('booking.rejected', $booking->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button class="text-sm text-red-600 hover:text-red-800" type="submit" name="status" value="rejected">
                                Cancel
                            </button>
                        </form>
                    </div>
                    @endif
                </div>
            @endforeach

            <div class="mt-6 flex items-center justify-beetween">
                {{ $bookings->links() }}
            </div>
        </div>

        <!-- Pagination Example -->
    </div>
</section>
