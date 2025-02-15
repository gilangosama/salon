<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class FutureDateTime implements Rule
{
    public function passes($attribute, $value)
    {
        // Ambil tanggal dari input
        $date = request()->input('date'); // Pastikan 'date' adalah nama field tanggal Anda

        // Jika tanggal tidak valid, kembalikan false
        if (!$date) {
            return false;
        }

        // Format tanggal dan waktu
        $dateTime = Carbon::createFromFormat('Y-m-d H:i', $date . ' ' . $value);

        // Cek apakah tanggal lebih dari hari ini
        if (Carbon::parse($date)->isFuture()) {
            return true; // Izinkan semua waktu jika tanggal di masa depan
        }

        // Jika tanggal adalah hari ini, pastikan waktu tidak lebih dari waktu saat ini
        return $dateTime->isAfter(now());
    }

    public function message()
    {
        return 'Waktu tidak valid. Pastikan waktu yang dipilih adalah setelah waktu saat ini jika tanggal adalah hari ini.';
    }
}
