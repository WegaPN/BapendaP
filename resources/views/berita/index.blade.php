@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Daftar Berita Tengah</h1>
        <a href="{{ route('berita.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded mb-4">Tambah Berita Baru</a>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-4">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal Publikasi
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($berita as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $item->judul }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $item->kategori->nama }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $item->created_at->format('d-m-Y H:i:s') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('berita.show', $item->slug) }}" class="text-blue-500 hover:text-blue-700 font-medium mr-2">Detail</a>
                                <a href="{{ route('berita.edit', $item->slug) }}" class="text-green-500 hover:text-green-700 font-medium mr-2">Edit</a>
                                <form action="{{ route('berita.destroy', $item->slug) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 font-medium">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
