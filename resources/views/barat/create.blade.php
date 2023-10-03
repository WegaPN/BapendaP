<!-- resources/views/berita/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">Tambah Berita Baru</h1>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <form action="{{ route('barat.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 font-semibold mb-2">Judul</label>
                    <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded-lg focus:outline-none" required>
                </div>

                <div class="mb-4">
                    <label for="konten" class="block text-gray-700 font-semibold mb-2">Konten</label>
                    <textarea name="konten" id="konten" rows="6" class="w-full px-4 py-2 border rounded-lg focus:outline-none" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="gambar" class="block text-gray-700 font-semibold mb-2">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="w-full py-2 focus:outline-none" accept="image/*" onchange="previewImage(event)">
                    <img id="gambar-preview" class="mt-2" style="max-width: 200px; max-height: 200px;" />
                </div>

                <div class="mb-4">
                    <label for="kategori" class="block text-gray-700 font-semibold mb-2">Kategori</label>
                    <select name="kategori" id="kategori" class="w-full px-4 py-2 border rounded-lg focus:outline-none" required>
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function() {
                var imgElement = document.getElementById("gambar-preview");
                imgElement.src = reader.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection
