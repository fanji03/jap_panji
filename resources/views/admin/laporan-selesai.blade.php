@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Laporan Selesai</h2>
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
                
                <td>{{ date('m/d/Y', strtotime($laporan->tanggal_laporan)) }}</td>
                <td>{{ $laporan->jenis_laporan }}</td>
                <td>{{ $laporan->status_laporan }}</td>
                <td>
                    @if($laporan->status_laporan != 'Selesai Diproses')
                        <a href="{{ route('laporan.selesai', $laporan->id) }}" class="btn btn-success">Selesai</a>
                    @endif
                    <a href="{{ route('laporan.hapus', $laporan->id) }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
