<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\ArenaController;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jenis;
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

        $arenas = Arena::with('jenisArena')->where('jenis_id', $id)->get();


        // dd($arenas, $jenisLap);

        return view('customer.daftar-lap.detailLapangan', compact('arenas', 'jenisLap'));
    }

    public function cekJadwal($id)
    {
        $arenas = Arena::findOrFail($id);

        return view('customer.daftar-lap.lapangan', compact('arenas'));
    }

    public function booking($id)
    {
        $arenas = Arena::findOrFail($id);

        // dd($arenas,$jadwals);

        return view('customer.daftar-lap.booking', compact('arenas'));
    }

    public function bookingStore($id)
    {
        //
        $arenas = Arena::findOrFail($id);
    }
}
