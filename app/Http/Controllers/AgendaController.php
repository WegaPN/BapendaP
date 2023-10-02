<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;


class AgendaController extends Controller
{
    // Menampilkan semua agenda
    public function index()
    {
        $agenda = Agenda::all();
        return view('agenda.index', compact('agenda'));
    }

    // Menampilkan formulir untuk membuat agenda baru
    public function create()
    {
        return view('agenda.create');
    }

    // Menyimpan agenda baru ke dalam basis data
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        Agenda::create($request->all());

        return redirect()->route('agenda.index')
            ->with('success', 'Agenda berhasil ditambahkan.');
    }

    // Menampilkan detail agenda
    public function show($id)
    {
        $agenda = Agenda::find($id);
        return view('agenda.show', compact('agenda'));
    }

    // Menampilkan formulir untuk mengedit agenda
    public function edit($id)
    {
        $agenda = Agenda::find($id);
        return view('agenda.edit', compact('agenda'));
    }

    // Menyimpan perubahan agenda yang diedit
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        Agenda::find($id)->update($request->all());

        return redirect()->route('agenda.index')
            ->with('success', 'Agenda berhasil diperbarui.');
    }

    // Menghapus agenda
    public function destroy($id)
    {
        Agenda::find($id)->delete();

        return redirect()->route('agenda.index')
            ->with('success', 'Agenda berhasil dihapus.');
    }
}
