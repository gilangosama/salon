<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Rules\FutureDateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'date' => 'required|date|after_or_equal:today',
            'time' => ['required', 'date_format:H:i', new FutureDateTime],
            'notes' => 'nullable'
        ], [
            'name.required' => 'Please enter your name',
            'phone.required' => 'Please enter your phone number',
            'email.required' => 'Please enter your email',
            'service.required' => 'Please select a service',
            'date.required' => 'Please select a date',
            'time.required' => 'Please select a time',
        ]);

        if ($booking->fails()) {
            return back()->withErrors($booking)->withInput();
        }

        Booking::create([
            'user_id' => auth()->id(),
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'service' => $request['service'],
            'date' => $request['date'],
            'time' => $request['time'],
            'notes' => $request['notes'],
            'status' => 'pending'
        ]);
        $phoneAdmin = '6281296967617'; // ganti no wa dengan no wa admin
        $message = 'Hallo, saya ingin membooking layanan ' . $request['service'] . ' pada tanggal ' . $request['date'] . ' pukul ' . $request['time'] .' dengan atas nama '. $request['name'] .'. Terima kasih.'; 
        return redirect()->away('https://api.whatsapp.com/send?phone='. $phoneAdmin . '&text=' . $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booking = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'date' => 'required|date|after_or_equal:today',
            'time' => ['required', 'date_format:H:i', new FutureDateTime],
            'notes' => 'nullable'
        ], [
            'name.required' => 'Please enter your name',
            'phone.required' => 'Please enter your phone number',
            'email.required' => 'Please enter your email',
            'service.required' => 'Please select a service',
            'date.required' => 'Please select a date',
            'time.required' => 'Please select a time',
        ]);

        if ($booking->fails()) {
            return back()->withErrors($booking)->withInput();
        }

        $bookingData = Booking::findOrFail($id);
        $bookingData->update($booking->validated());
        Alert::success('Success', 'Booking has been successfully updated');
        return redirect()->route('bookings.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        Alert::success('Success', 'Booking has been successfully deleted');
        return redirect()->route('bookings.index');
    }
}
