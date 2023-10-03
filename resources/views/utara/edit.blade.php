<!-- resources/views/berita/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Berita</h1>

    <form action="{{ route('utara.update', $utara->slug) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" value="{{ $utara->judul }}" required>

        <label for="konten">Konten:</label>
        <textarea name="konten" id="konten" required>{{ $utara->konten }}</textarea>

        <!-- Tambahkan field dan elemen HTML lainnya sesuai kebutuhan -->

        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection

