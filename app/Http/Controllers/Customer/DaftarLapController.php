<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jenis;
use App\Models\Booking;
use App\Models\Arena;

class DaftarLapController extends Controller
{
    //
    public function index()
    {
        //
        $arenas = Jenis::all();
        return view('customer.daftar-lap.index', compact('arenas'));
    }

    public function detail($id)
    {
        $jenisLap = Jenis::findOrFail($id);

        $arenas = Arena::with('jenis')->where('jenis_id', $id)->get();


        // dd($arenas, $jenisLap);

        return view('customer.daftar-lap.detailLapangan', compact('arenas', 'jenisLap'));
    }

    public function cekLapangan(Request $request, $id)
    {
        $arenas = Arena::with('jenis')->findOrFail($id);

        $jadwals = $request->jadwals;
        $bookings = Booking::whereDate('date', 'like', "%" . $jadwals . "%")->get();


        // dd($lapangans,$jadwals);

        return view('customer.lapangan.index', compact('arenas', 'jadwals', 'bookings'));
    }
}
