<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\LaporanPublikController;
use App\Http\Controllers\VerifikasiLaporanController;
use App\Http\Controllers\SeluruhLaporanController;
use App\Http\Controllers\LaporanDiprosesController;
use App\Http\Controllers\LaporanSelesaiController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Berikan akses ke halaman ini hanya jika sudah login
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

// Route untuk menampilkan dashboard pengguna
Route::get('/dashboard', [AuthController::class, 'showDashboard'])->middleware('auth')->name('dashboard');

// Route untuk menyimpan laporan
Route::post('/report', [ReportController::class, 'store'])->name('report.store');

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/logout', function () {
    Auth::logout(); // Logout pengguna
    return redirect('/'); // Arahkan ke halaman beranda
})->name('logout');


Route::post('/login', [Auth\LoginController::class, 'login'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Rute untuk login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

// Rute untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::post('/report/store', [ReportController::class, 'store'])->name('report.store');
Route::get('/register/admin', [RegisterController::class, 'showAdminRegistrationForm'])->name('register.admin');
Route::post('/register/admin', [RegisterController::class, 'registerAdmin']);

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/laporanpublik', [LaporanPublikController::class, 'index'])->name('laporanpublik.index');

// Rute admin verifikasi laporan
Route::get('verifikasi-laporan', [VerifikasiLaporanController::class, 'index'])->name('verifikasi.laporan.index');
Route::post('verifikasi-laporan/verifikasi/{id}', [VerifikasiLaporanController::class, 'verifikasi'])->name('verifikasi.laporan.verifikasi');
Route::delete('verifikasi-laporan/hapus/{id}', [VerifikasiLaporanController::class, 'hapus'])->name('verifikasi.laporan.hapus');


// Rute admin seluruh laporan
//Route::get('/seluruh-laporan', [SeluruhLaporanController::class, 'index'])->name('admin.seluruh-laporan');
Route::get('/admin/seluruh-laporan', [SeluruhLaporanController::class, 'index'])->name('admin.seluruh_laporan');


// Rute admin laporan diproses
//Route::get('/admin/laporan-diproses', [LaporanDiprosesController::class, 'diproses'])->name('admin.laporan_diproses');
Route::get('/laporan-diproses', [LaporanDiprosesController::class, 'diproses'])->name('laporan.diproses');

// Rute laporan selesai
//Route::get('/admin/laporan-selesai', [LaporanSelesaiController::class, 'index'])->name('laporan.selesai');
//Route::post('/admin/laporan-selesai/selesai/{id}', [LaporanSelesaiController::class, 'selesai'])->name('laporan.selesai.update');
//Route::delete('/admin/laporan-selesai/hapus/{id}', [LaporanSelesaiController::class, 'hapus'])->name('laporan.selesai.delete');

//Route::get('/admin/laporan-selesai', [LaporanSelesaiController::class, 'index'])->name('admin.laporan.selesai');

// Mengubah status laporan menjadi "Selesai Diproses" di dalam folder admin
//Route::put('/admin/laporan-selesai/{id}/selesai', [LaporanSelesaiController::class, 'selesai'])->name('admin.laporan.selesai.selesai');

// Menghapus laporan di dalam folder admin
//Route::delete('/admin/laporan-selesai/{id}', [LaporanSelesaiController::class, 'hapus'])->name('admin.laporan.selesai.hapus');

//Route::get('/admin/laporan-selesai', [LaporanSelesaiController::class, 'index'])->name('laporan.selesai.index');
//Route::post('/admin/laporan-selesai/selesai/{id}', [LaporanSelesaiController::class, 'selesai'])->name('laporan.selesai.update');
//Route::delete('/admin/laporan-selesai/hapus/{id}', [LaporanSelesaiController::class, 'hapus'])->name('laporan.selesai.delete');
//Route::delete('/laporan-selesai/hapus/{id}', [LaporanSelesaiController::class, 'hapus'])->name('laporan.selesai.delete');
Route::get('/admin/laporan-selesai', [LaporanSelesaiController::class, 'index'])->name('laporan.index');
Route::get('/admin/laporan-selesai/{id}/selesai', [LaporanSelesaiController::class, 'selesai'])->name('laporan.selesai');
Route::get('/admin/laporan-selesai/{id}/hapus', [LaporanSelesaiController::class, 'hapus'])->name('laporan.hapus');