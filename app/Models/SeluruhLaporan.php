<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeluruhLaporan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari nama model (opsional)
    protected $table = 'seluruh_laporans'; // jika tabel bernama 'seluruh_laporans' di database

    // Tentukan kolom yang bisa diisi
    protected $fillable = [
        'tanggal_laporan',
        'jenis_laporan',
        'status',
    ];
}
