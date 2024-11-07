<?php

namespace App\Http\Controllers;

use App\Models\LaporanDiproses; // Pastikan ini sesuai dengan model baru
use Illuminate\Http\Request;

class LaporanDiprosesController extends Controller
{
    // Method untuk menampilkan halaman laporan diproses
    public function diproses()
    {
        // Ambil semua data laporan dari database
        $laporan = LaporanDiproses::all(); // Ganti Laporan dengan LaporanDiproses

        // Kirim data ke view
        return view('admin.laporan-diproses', compact('laporan'));
    }
}
