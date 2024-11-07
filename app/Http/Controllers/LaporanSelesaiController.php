<?php

namespace App\Http\Controllers;

use App\Models\LaporanSelesai;
use Illuminate\Http\Request;

class LaporanSelesaiController extends Controller
{
    public function index()
    {
        $laporans = LaporanSelesai::all();
        return view('admin.laporan-selesai', compact('laporans'));
    }

    public function selesai($id)
    {
        $laporan = LaporanSelesai::find($id);
        if ($laporan) {
            $laporan->status_laporan = 'Selesai Diproses';
            $laporan->save();
        }
        return redirect()->back();
    }

    public function hapus($id)
    {
        LaporanSelesai::destroy($id);
        return redirect()->back();
    }
}
