<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $bookings = Booking::latest()->paginate(10);
        return view('admin.bookings', compact('bookings'));
    }

    public function search(Request $request)
    {
        $query = Booking::query();

        // Filter berdasarkan status
        if ($request->status && $request->status != 'all') {
            $query->where('status', $request->status);
        }

        // Pencarian berdasarkan nama atau service
        if ($request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                  ->orWhere('service', 'like', "%$search%")
                  ->orWhere('phone', 'like', "%$search%");
            });
        }

        $bookings = $query->latest()->paginate(10);

        return response()->json([
            'html' => view('admin.table', compact('bookings'))->render()
        ]);
    }

    public function update(Request $request, Booking $booking)
    {
        $booking->update(['status' => $request->status]);
    
        Alert::success('Success', 'Booking status updated!');
    
        return redirect()->back();
    }
}
