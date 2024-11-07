<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanDiproses extends Model
{
    use HasFactory;

    // Tentukan jika ada properti yang ingin ditambahkan, seperti table atau fillable
    protected $table = 'laporan_diproses';
 
}
