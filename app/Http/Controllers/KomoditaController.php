<?php

namespace App\Http\Controllers;

use App\Models\Komodita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class KomoditaController extends Controller
{
    public function index()
    {
        $komoditas = Komodita::all();
        return view('komoditas.index', compact('komoditas'));
    }

    public function create()
    {
        return view('komoditas.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'komoditas_nama' => 'required'
        ]);

        Komodita::create([
            'komoditas_kode' => Komodita::generateKode(), //Ambil dari model Komoditas fungis generate kode
            'komoditas_nama' => $request->komoditas_nama
        ]);

        return redirect()->route('komoditas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(Komodita $komodita)
    {
        return view('komoditas.show', compact('komodita'));
    }

    public function edit(Komodita $komodita)
    {
        return view('komoditas.edit', compact('komodita'));
    }

    public function update(Request $request, Komodita $komodita)
    {
        //validate form
        $validate = $request->validate([
            'komoditas_nama' => 'required'
        ]);

        $komodita->update($validate);
        //redirect to index
        return redirect()->route('komoditas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Komodita $komodita)
    {
        //delete komoditas
        $komodita->delete();

        //redirect to index
        return redirect()->route('komoditas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
