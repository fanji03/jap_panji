<?php

namespace Database\Seeders;

use App\Models\LaporanDiproses; // Pastikan ini mengarah ke model yang benar
use Illuminate\Database\Seeder;

class LaporanDiprosesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data laporan yang sedang diproses
        LaporanDiproses::create([
            'tanggal' => '2024-10-28',
            'jenis' => 'Pembullyan',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-29',
            'jenis' => 'Pelecehan Seksual',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-30',
            'jenis' => 'Kekerasan Verbal',
            'status' => 'Sedang Diproses',
        ]);
        
        // Jika ada laporan lain yang ingin ditambahkan
        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);

        LaporanDiproses::create([
            'tanggal' => '2024-10-31',
            'jenis' => 'Pencurian',
            'status' => 'Sedang Diproses',
        ]);
    }
}
