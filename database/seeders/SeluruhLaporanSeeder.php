<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SeluruhLaporan;

class SeluruhLaporanSeeder extends Seeder
{
    public function run()
    {
        SeluruhLaporan::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'Pembullyan',
            'status' => 'Belum Diverifikasi'
        ]);

        SeluruhLaporan::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'Pelecehan Seksual',
            'status' => 'Terverifikasi'
        ]);

        SeluruhLaporan::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'Kekerasan Verbal',
            'status' => 'Diproses'
        ]);
    }
}
