@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-2">
        <h2 class="mb-0">Menu Makanan Mingguan</h2>
        <a href="{{ route('makanan.create') }}" class="btn btn-success">Tambah Menu</a>
    </div>

    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Sarapan</th>
                <th>Makan Siang</th>
                <th>Makan Malam</th>
                <th>Kalori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->hari }}</td>
                <td>{{ $item->sarapan }}</td>
                <td>{{ $item->makan_siang }}</td>
                <td>{{ $item->makan_malam }}</td>
                <td>{{ $item->kalori ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
