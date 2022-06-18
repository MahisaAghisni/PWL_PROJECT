<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Arena;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    //
    public function booking($id)
    {
        $arenas = Arena::findOrFail($id);

        // dd($lapangans,$jadwals);

        return view('customer.booking.index', compact('arenas'));
    }

    public function bookingStore(Request $request)
    {
        //
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required',
        ]);

        Booking::create([
            'users_id' => Auth::user()->id,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'arenas_id' => $request->arenas_id,
            'date' => $request->date,
            'status_id' => 1,
            'nama' => $request->nama
        ]);

        return redirect()->route('booking.success');
    }

    public function success()
    {

        return view('customer.order.booking-success');
    }
}
