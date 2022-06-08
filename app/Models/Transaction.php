<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel transactions
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey


    protected $fillable = [
        'arenas_id',
        'status_id',
        'sub_total',
        'jadwal_id',
    ];
}
