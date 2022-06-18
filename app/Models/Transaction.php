<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel status_transactions
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'users_id',
        'status_id',
        'bookings_id',
        'sub_total',
        'metode_pembayaran',
        'no_hp',
        'bukti_pembayaran'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function bookings()
    {
        return $this->belongsTo(Booking::class, 'bookings_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
