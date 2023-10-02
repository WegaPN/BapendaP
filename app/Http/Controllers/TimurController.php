<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Timur;
use App\Models\Kategori;

class TimurController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:timur-list|timur-create|timur-edit|timur-delete', ['only' => ['index']]);
        $this->middleware('permission:timur-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:timur-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:timur-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $timur = Timur::with('kategori')->get();
        return view('timur.index', compact('timur'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('timur.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required',
        ]);

        $timur = new Timur;
        $timur->judul = $request->judul;
        $timur->konten = $request->konten;
        $timur->kategori_id = $request->kategori;
        $timur->penerbit = auth()->user()->name;


        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/img');
            $timur->gambar = str_replace('public/', 'storage/', $gambarPath);
        }

        $timur->slug = Str::slug($request->judul);
        $timur->save();

        return redirect()->route('timur.index')->with('success', 'Berita wilayah timur berhasil disimpan');
    }

    public function show($slug)
    {
        $timur = Timur::where('slug', $slug)->firstOrFail();
        return view('timur.show', compact('timur'));
    }

    public function edit($slug)
    {
        $timur = Timur::where('slug', $slug)->firstOrFail();
        return view('timur.edit', compact('timur'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required',
        ]);

        $timur = Timur::findOrFail($id);
        $timur->judul = $request->judul;
        $timur->konten = $request->konten;
        $timur->kategori_id = $request->kategori;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $gambarName);
            $timur->gambar = $gambarName;
        }

        $timur->save();

        return redirect()->route('timur.index')->with('success', 'Berita wilayah timur berhasil diperbarui');
    }

    public function destroy($id)
    {
        $timur = Timur::findOrFail($id);
        $timur->delete();

        return redirect()->route('timur.index')->with('success', 'Berita wilayah timur berhasil dihapus');
    }
}
