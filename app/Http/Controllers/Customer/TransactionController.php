<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function order()
    {
        //
        $bookings = Booking::with('status', 'arenas')->where('users_id', Auth::user()->id)->get();

        $transactions = Transaction::with('status', 'bookings')->where('users_id', Auth::user()->id)->get();

        // dd($bookings);

        return view('customer.order.index', compact('bookings', 'transactions'));
    }

    public function checkout($id)
    {
        $bookings = Booking::with('arenas')->findOrFail($id);

        return view('customer.order.checkout', compact('bookings'));
    }

    public function store(Request $request, $id)
    {
        $bookings = Booking::findOrFail($id);

        if ($request->metode_pembayaran = 'bayar di tempat') {

            Transaction::create([
                'users_id' => Auth::user()->id,
                'bookings_id' => $bookings->id,
                'status_id' => 2,
                'sub_total' => $request->sub_total,
                'metode_pembayaran' => $request->metode_pembayaran,
                'no_hp' => $request->no_hp,
            ]);
        } elseif ($request->metode_pembayaran = 'transfer') {

            Transaction::create([
                'users_id' => Auth::user()->id,
                'bookings_id' => $bookings->id,
                'status_id' => 1,
                'sub_total' => $request->sub_total,
                'metode_pembayaran' => $request->metode_pembayaran,
                'no_hp' => $request->no_hp,
                'bukti_pembayaran' => $request->bukti_pembayaran,
            ]);
        }

        Booking::where('users_id', Auth::user()->id)->where('id', $id)->update([
            'status_id' => 2,
        ]);

        return redirect()->route('order.index');
    }
}
