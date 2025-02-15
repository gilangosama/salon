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
                    <span
                        class="text-sm font-medium 
                        {{ $booking->status === 'pending' ? 'text-yellow-600' : '' }}
                        {{ $booking->status === 'approved' ? 'text-blue-600' : '' }}
                        {{ $booking->status === 'done' ? 'text-green-600' : '' }}
                        {{ $booking->status === 'rejected' ? 'text-red-600' : '' }}">
                        {{ $booking->status }}
                    </span>
                </td>
                <td class="px-4 py-4 space-x-3">
                    @if ($booking->status == 'pending')
                        <form action =  "{{ route('booking.approved', $booking->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="approved">
                            <button type="submit" class="text-sm text-green-600 font-medium">Approve</button>
                        </form>
                        <form action =  "{{ route('booking.rejected', $booking->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="rejected">
                            <button type="submit" class="text-sm text-red-600 font-medium">Reject</button>
                        </form>
                    @elseif ($booking->status == 'approved')
                        <form action =  "{{ route('booking.done', $booking->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="done">
                            <button type="submit" class="text-sm text-red-600 font-medium">Done</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $bookings->links() }}
</div>
