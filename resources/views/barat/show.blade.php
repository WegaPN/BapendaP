@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-4">Detail Berita</h1>

    <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2">
                <h2 class="text-2xl font-semibold mb-2">{{ $barat->judul }}</h2>
                <p class="text-lg text-gray-700 leading-relaxed text-justify">{{ $barat->konten }}</p>
            </div>
            <div class="w-full md:w-1/2 md:pl-4">
                <a href="{{ asset($barat->gambar) }}" data-lightbox="gambar" data-title="{{ $barat->judul }}">
                    <img src="{{ asset($barat->gambar) }}" alt="{{ $barat->judul }}" class="w-full h-auto object-cover object-center">
                </a>
                <p class="text-gray-500 text-sm mt-2">Tanggal Publikasi {{ $barat->created_at->format('d-m-Y H:i:s') }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Load library Lightbox -->
<script src="{{ asset('path/to/lightbox.js') }}"></script>
@endsection
