<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use App\Models\Komodita;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function index()
    {
        $produksis = produksi::all();
        return view('produksi.index', compact('produksis'));

    }

    public function create()
    {
        $komoditas = Komodita::all();
        return view('produksi.create',compact('komoditas'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' =>  'required',
            'komoditas_kode' =>'required',
            'produksi' => 'required'
        ]);

        produksi::create($request->all());

        return redirect()->route('produksi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(produksi $produksi)
    {
        return view('produksi.show',compact('produksi'));    }

    public function edit(produksi $produksi)
    {
        $komoditas = Komodita::all();
        return view('produksi.edit', compact('produksi','komoditas'));
    }

    public function update(Request $request, produksi $produksi)
    {
        //validate form
        $request->validate([
            'tanggal' =>  'required',
            'komoditas_kode' => 'required',
            'produksi' => 'required',
        ]);

        $produksi->update($request->all());

        //redirect to index
        return redirect()->route('produksi.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(produksi $produksi)
    {
        //delete produksis
        $produksi->delete();

        //redirect to index
        return redirect()->route('produksi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
