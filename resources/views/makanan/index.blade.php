@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-2">
        <h2 class="mb-0">Menu Makanan Mingguan</h2>
        <a href="{{ route('makanan.create') }}" class="btn btn-success">Tambah Menu</a>
    </div>

    <table class="table table-bordered-mt-2">
    <thead>
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Sarapan</th>
            <th>Makan Siang</th>
            <th>Makan Malam</th>
            <th>Kalori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->hari }}</td>
            <td>{{ $item->sarapan }}</td>
            <td>{{ $item->makan_siang }}</td>
            <td>{{ $item->makan_malam }}</td>
            <td>{{ $item->kalori }}</td>
            <td>
                <a href="{{ route('makanan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('makanan.destroy', $item->id) }}" method="POST" style="display:inline;">
                    
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin ingin menghapus menu ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        
    </tbody>
</table>
