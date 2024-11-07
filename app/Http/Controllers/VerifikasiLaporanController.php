<?php

namespace App\Http\Controllers;

use App\Models\VerifikasiLaporan; // Ganti ke model VerifikasiLaporan
use Illuminate\Http\Request;

class VerifikasiLaporanController extends Controller
{
    public function index()
    {
        $laporans = VerifikasiLaporan::all(); // Ubah ke VerifikasiLaporan
        return view('admin.laporan-terverifikasi', compact('laporans'));
    }

    public function verifikasi($id)
    {
        $laporan = VerifikasiLaporan::findOrFail($id); // Ubah ke VerifikasiLaporan
        $laporan->status = 'Sudah Terverifikasi';
        $laporan->save();
        return redirect()->back()->with('success', 'Laporan berhasil diverifikasi.');
    }

    public function hapus($id)
    {
        VerifikasiLaporan::destroy($id); // Ubah ke VerifikasiLaporan
        return redirect()->back()->with('success', 'Laporan berhasil dihapus.');
    }
}

