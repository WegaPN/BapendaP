<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;



class BeritaController extends Controller
{
    /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
function __construct()
{
    $this->middleware('permission:berita-list|berita-create|berita-edit|berita-delete', ['only' => ['index']]);
    $this->middleware('permission:berita-create', ['only' => ['create', 'store']]);
    $this->middleware('permission:berita-edit', ['only' => ['edit', 'update']]);
    $this->middleware('permission:berita-delete', ['only' => ['destroy']]);
}
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    $berita = Berita::with('kategori')->get();
    return view('berita.index', compact('berita'));
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
    {
        $kategori = Kategori::all();
        return view('berita.create', compact('kategori'));
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'konten' => 'required',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'kategori' => 'required',
    ]);

    $berita = new Berita;
    $berita->judul = $request->judul;
    $berita->konten = $request->konten;
    $berita->kategori_id = $request->kategori;

    // Tambahkan informasi penerbit
    $berita->penerbit = auth()->user()->name;

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('public/img');
        $berita->gambar = str_replace('public/', 'storage/', $gambarPath);
    }
    
    // Buat slug dari judul berita
    $berita->slug = Str::slug($request->judul);
   
    $berita->save();

    return redirect()->route('berita.index')->with('success', 'Berita berhasil disimpan');
}


/**
 * Display the specified resource.
 *
 * @param  \App\Models\Shm  $shm
 * @return \Illuminate\Http\Response
 */
public function show($slug)
{
    $berita = Berita::where('slug', $slug)->firstOrFail();
    return view('berita.show', compact('berita'));
}


/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\Shm  $shm
 * @return \Illuminate\Http\Response
 */
// BeritaController.php
public function edit($slug)
{
    $berita = Berita::where('slug', $slug)->firstOrFail();
    return view('berita.edit', compact('berita'));
}


/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\Shm  $shm
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required',
        'konten' => 'required',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'kategori' => 'required',
    ]);

    $berita = Berita::findOrFail($id);
    $berita->judul = $request->judul;
    $berita->konten = $request->konten;
    $berita->kategori_id = $request->kategori;

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('images'), $gambarName);
        $berita->gambar = $gambarName;
    }

    $berita->save();

    return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
}
/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Models\Shm  $shm
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $berita = Berita::findOrFail($id);
    $berita->delete();

    return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
}

}
