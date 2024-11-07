<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LaporanSelesai;

class LaporanSelesaiSeeder extends Seeder
{
    public function run()
    {
        LaporanSelesai::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'Pembullyan',
            'status_laporan' => 'Sedang Diproses',
        ]);

        LaporanSelesai::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'tahu bulat',
            'status_laporan' => 'Sedang Diproses',
        ]);

        LaporanSelesai::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'soto babat',
            'status_laporan' => 'Sedang Diproses',
        ]);

        LaporanSelesai::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'nasi goreng',
            'status_laporan' => 'Sedang Diproses',
        ]);

        LaporanSelesai::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'mie ayam',
            'status_laporan' => 'Sedang Diproses',
        ]);

        LaporanSelesai::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'kekerasan',
            'status_laporan' => 'Sedang Diproses',
        ]);

        LaporanSelesai::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'Pembullyan',
            'status_laporan' => 'Sedang Diproses',
        ]);

        LaporanSelesai::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'di pukulin',
            'status_laporan' => 'Sedang Diproses',
        ]);

        LaporanSelesai::create([
            'tanggal_laporan' => '2024-10-28',
            'jenis_laporan' => 'di cium',
            'status_laporan' => 'Sedang Diproses',
        ]);

        // Tambahkan data lain sesuai kebutuhan
    }
}
