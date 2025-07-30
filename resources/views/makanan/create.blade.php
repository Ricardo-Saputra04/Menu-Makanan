@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Menu Makanan</h2>
    <form action="{{ route('makanan.store') }}" method="POST">
        @csrf
        @include('makanan.form')
    </form>
</div>
@endsection