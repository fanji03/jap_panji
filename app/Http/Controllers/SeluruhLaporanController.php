<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeluruhLaporan;

class SeluruhLaporanController extends Controller
{
    public function index()
{
    $laporans = SeluruhLaporan::all(); // atau model sesuai kebutuhan
    return view('admin.seluruh-laporan', compact('laporans'));
}
}

