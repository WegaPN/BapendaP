<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Barat;
use App\Models\Kategori;
use Spatie\Permission\Models\Role;


class BaratController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:barat-list|barat-create|barat-edit|barat-delete', ['only' => ['index']]);
        $this->middleware('permission:barat-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:barat-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:barat-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $barat = Barat::with('kategori')->get();
        return view('barat.index', compact('barat'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('barat.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required',
        ]);

        $barat = new Barat;
        $barat->judul = $request->judul;
        $barat->konten = $request->konten;
        $barat->kategori_id = $request->kategori;
        $barat->penerbit = auth()->user()->name;


        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/img');
            $barat->gambar = str_replace('public/', 'storage/', $gambarPath);
        }

        $barat->slug = Str::slug($request->judul);
        $barat->save();

        return redirect()->route('barat.index')->with('success', 'Berita wilayah barat berhasil disimpan');
    }

    public function show($slug)
    {
        $barat = Barat::where('slug', $slug)->firstOrFail();
        return view('barat.show', compact('barat'));
    }

    public function edit(Barat $barat)
    {
        return view('barat.edit', compact('barat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required',
        ]);

        $barat = Barat::findOrFail($id);
        $barat->judul = $request->judul;
        $barat->konten = $request->konten;
        $barat->kategori_id = $request->kategori;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $gambarName);
            $barat->gambar = $gambarName;
        }

        $barat->save();

        return redirect()->route('barat.index')->with('success', 'Berita wilayah barat berhasil diperbarui');
    }

    public function destroy($id)
    {
        $barat = Barat::findOrFail($id);
        $barat->delete();

        return redirect()->route('barat.index')->with('success', 'Berita wilayah barat berhasil dihapus');
    }
}
