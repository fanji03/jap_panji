<?php


namespace Database\Seeders;

use App\Models\VerifikasiLaporan; // Ubah ke model yang benar
use Illuminate\Database\Seeder;

class VerifikasiLaporanSeeder extends Seeder
{
    public function run()
    {
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'Pembullyan', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'a', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'b', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'c', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'd', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'e', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'f', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'g', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'h', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'i', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'j', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'k', 'status' => 'Belum Terverifikasi']);
        VerifikasiLaporan::create(['tanggal_laporan' => '2024-10-28', 'jenis_laporan' => 'l', 'status' => 'Belum Terverifikasi']);
    }
}

