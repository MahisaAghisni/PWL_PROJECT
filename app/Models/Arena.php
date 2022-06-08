<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arena extends Model
{
    use HasFactory;

    protected $table = 'arenas'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel arenas
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey


    protected $fillable = [
        'id',
        'price',
        'image',
    ];
}
