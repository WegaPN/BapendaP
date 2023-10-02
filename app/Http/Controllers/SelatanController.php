<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Selatan;
use App\Models\Kategori;

class SelatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:selatan-list|selatan-create|selatan-edit|selatan-delete', ['only' => ['index']]);
        $this->middleware('permission:selatan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:selatan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:selatan-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $selatan = Selatan::with('kategori')->get();
        return view('selatan.index', compact('selatan'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('selatan.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required',
        ]);

        $selatan = new Selatan;
        $selatan->judul = $request->judul;
        $selatan->konten = $request->konten;
        $selatan->kategori_id = $request->kategori;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/img');
            $selatan->gambar = str_replace('public/', 'storage/', $gambarPath);
        }

        $selatan->slug = Str::slug($request->judul);
        $selatan->save();

        return redirect()->route('selatan.index')->with('success', 'Berita wilayah selatan berhasil disimpan');
    }

    public function show($slug)
    {
        $selatan = Selatan::where('slug', $slug)->firstOrFail();
        return view('selatan.show', compact('selatan'));
    }

    public function edit(Selatan $selatan)
    {
        return view('selatan.edit', compact('selatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required',
        ]);

        $selatan = Selatan::findOrFail($id);
        $selatan->judul = $request->judul;
        $selatan->konten = $request->konten;
        $selatan->kategori_id = $request->kategori;
        $selatan->penerbit = auth()->user()->name;


        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $gambarName);
            $selatan->gambar = $gambarName;
        }

        $selatan->save();

        return redirect()->route('selatan.index')->with('success', 'Berita wilayah selatan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $selatan = Selatan::findOrFail($id);
        $selatan->delete();

        return redirect()->route('selatan.index')->with('success', 'Berita wilayah selatan berhasil dihapus');
    }
}
