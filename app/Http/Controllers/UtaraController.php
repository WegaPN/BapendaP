<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Utara;
use App\Models\Kategori;

class UtaraController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:utara-list|utara-create|utara-edit|utara-delete', ['only' => ['index']]);
        $this->middleware('permission:utara-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:utara-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:utara-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $utara = Utara::with('kategori')->get();
        return view('utara.index', compact('utara'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('utara.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required',
        ]);

        $utara = new Utara;
        $utara->judul = $request->judul;
        $utara->konten = $request->konten;
        $utara->kategori_id = $request->kategori;
        $utara->penerbit = auth()->user()->name;


        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/img');
            $utara->gambar = str_replace('public/', 'storage/', $gambarPath);
        }

        $utara->slug = Str::slug($request->judul);
        $utara->save();

        return redirect()->route('utara.index')->with('success', 'Berita wilayah utara berhasil disimpan');
    }

    public function show($slug)
    {
        $utara = Utara::where('slug', $slug)->firstOrFail();
        return view('utara.show', compact('utara'));
    }

  public function edit($slug)
{
    $utara = Utara::where('slug', $slug)->firstOrFail();
    return view('utara.edit', compact('utara'));
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required',
        ]);

        $utara = Utara::findOrFail($id);
        $utara->judul = $request->judul;
        $utara->konten = $request->konten;
        $utara->kategori_id = $request->kategori;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $gambarName);
            $utara->gambar = $gambarName;
        }

        $utara->save();

        return redirect()->route('utara.index')->with('success', 'Berita wilayah utara berhasil diperbarui');
    }

    public function destroy($id)
    {
        $utara = Utara::findOrFail($id);
        $utara->delete();

        return redirect()->route('utara.index')->with('success', 'Berita wilayah utara berhasil dihapus');
    }
}
