@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Verifikasi Laporan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Laporan</th>
                <th>Jenis Laporan</th>
                <th>Status Laporan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporans as $index => $laporan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $laporan->tanggal_laporan }}</td>
                <td>{{ $laporan->jenis_laporan }}</td>
                <td>{{ $laporan->status }}</td>
                <td>
                    @if($laporan->status == 'Belum Terverifikasi')
                    <form action="{{ route('verifikasi.laporan.verifikasi', $laporan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button class="btn btn-warning">Verifikasi</button>
                    </form>
                    @endif
                    <form action="{{ route('verifikasi.laporan.hapus', $laporan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
