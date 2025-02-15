<table class="min-w-full bg-white mt-4">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="px-4 py-2">Customer</th>
            <th class="px-4 py-2">Service</th>
            <th class="px-4 py-2">Date & Time</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Action</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @foreach ($bookings as $booking)
        <tr>
            <td class="px-4 py-4">
                <div class="text-sm font-medium text-gray-900">{{ $booking->name }}</div>
                <div class="text-sm text-gray-500">{{ $booking->phone }}</div>
            </td>
            <td class="px-4 py-4">
                <div class="text-sm text-gray-900">{{ $booking->service }}</div>
            </td>
            <td class="px-4 py-4">
                <div class="text-sm text-gray-900">{{ $booking->date }}</div>
                <div class="text-sm text-gray-500">{{ $booking->time }}</div>
            </td>
            <td class="px-4 py-4">
                <span class="text-sm text-yellow-600 font-medium">{{ $booking->status }}</span>
            </td>
            <td class="px-4 py-4 space-x-3">
                <form id="statusForm" action="{{ route('booking.update', $booking->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" id="statusInput" value="">
                    
                    <button type="submit" class="text-green-600 hover:text-green-900" onclick="submitForm(event, 'approved')">Terima</button>
                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="submitForm(event, 'rejected')">Tolak</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $bookings->links() }}
</div>

<script>
    function submitForm(event, status) {
        event.preventDefault(); // Mencegah submit bawaan
        let statusInput = document.getElementById('statusInput');
        statusInput.value = status;
        // Kirim ulang form setelah nilai status diperbarui
        document.getElementById('statusForm').submit();
    }
</script>
