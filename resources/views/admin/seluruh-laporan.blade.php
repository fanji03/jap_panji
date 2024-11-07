<!-- resources/views/admin/seluruh_laporan.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Seluruh Laporan</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Laporan</th>
                <th>Jenis Laporan</th>
                <th>Status Terkini</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporanselesai as $index => $laporan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $laporan->tanggal_laporan }}</td>
                <td>{{ $laporan->jenis_laporan }}</td>
                <td>{{ $laporan->status }}</td>
                <td>
                    <a href="#" class="btn btn-info btn-sm">Lihat Detail</a>
                    <a href="#" class="btn btn-warning btn-sm">Ubah Status</a>
                </td>
            </tr>
            @endforeach
            
            <!-- Tambahkan baris kosong jika perlu untuk mengisi tabel -->
            @for ($i = count($laporans); $i < 9; $i++)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td colspan="4"></td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
@endsection
