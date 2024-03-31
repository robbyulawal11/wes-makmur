<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kategori::all();
        // dd($data)
        return view('kategori/tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'namaKategori' => 'required',
            'descKatrgori' => 'required'
        ]);

        Kategori::create($validator);
        return redirect('kategori')->with('success', 'Data berhasil diinput');
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
        $data = Kategori::find($id);

        return view('kategori/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Kategori::find($id);

        $validator = $request->validate([
            'namaKategori' => 'required',
            'descKatrgori' => 'required'
        ]);

        $data->update($validator);
        return redirect('kategori')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Kategori::find($id);
        $data->delete();
        return redirect('kategori')->with('success', 'Data berhasil dihapus');
    }
}
