<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function pending()
    {
        $transactions = Transaction::with('bookings')->where('status_id', 1)->get();

        return view('admin.transaksi.index', compact('transactions'));
    }
}
