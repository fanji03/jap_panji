@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Laporan Diproses</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Laporan Diproses</li>
        </ol>
    </nav>

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
            @foreach ($laporan as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('m/d/Y') }}</td>
                    <td>{{ $item->jenis }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Proses</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
