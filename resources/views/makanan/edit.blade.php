@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Menu Makanan</h2>
    <form action="{{ route('makanan.update', $makanan->id) }}" method="POST">
        @csrf @method('PUT')
        @include('makanan.form', ['makanan' => $makanan])
    </form>
</div>
@endsection