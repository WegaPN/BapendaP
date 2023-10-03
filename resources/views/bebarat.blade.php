@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Daftar Berita Barat</h1>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($beritaBarat as $item)
                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg zoom-card">
                        <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover object-center">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">{{ $item->judul }}</h3>
                            <p class="text-gray-700 overflow-hidden h-20">{{ $item->isi_utara }}</p>
                            <p class="text-gray-500 text-sm mt-2">Diupload pada {{ $item->created_at->format('d-m-Y H:i:s') }}</p>
                            <p class="text-gray-500 text-sm mt-2">Author : {{ $item->penerbit }}</p>
                            <a href="{{ route('utara.show', $item->slug) }}" class="text-blue-500 hover:text-blue-700 mt-4">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

    <div class="container mx-auto  bg-slate-500 w-screen"><h1 class="text-2xl font-bold mb-4">Container Baru</h1>
        </div>
<style>
    .swiper-container {
        width: 100%;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .swiper-slide {
        width: auto !important;
        margin-right: 20px;
    }

    .zoom-card {
        transition: transform 0.3s;
    }

    .zoom-card:hover {
        transform: scale(1.1);
    }

    .text-gray-700.overflow-hidden {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Jumlah baris maksimum */
        -webkit-box-orient: vertical;
    }
</style>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 16,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
@endsection
