<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::all();
        return view('produk/tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk/tambah', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'namaProduk' => 'required',
            'harga' => 'required',
            'descProduk' => 'required',
            'kategori_id' => 'required'
        ]);

        $validator['foto'] = $request->file('foto')->store('img');
        Produk::create($validator);
        return redirect('produk')->with('success', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Produk::find($id);
        $kategori = Kategori::all();
        return view('produk/edit', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Produk::find($id);

        $validator = $request->validate([
            'namaProduk' => 'required',
            'harga' => 'required',
            'descProduk' => 'required',
            'kategori_id' => 'required'
        ]);

        try {
            $validator['foto'] = $request->file('foto')->store('img');
        } catch (\Throwable $th) {
            $validator['foto'] = $data->foto;
        }

        $data->update($validator);
        return redirect('produk')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Produk::find($id);
        $data->delete();
        return redirect('produk')->with('success', 'Data berhasil dihapus');
    }
}
