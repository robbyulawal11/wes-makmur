<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::all();
        return view('post/tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('post/tambah', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori_id' => 'required'
        ]);

        Post::create($validator);
        return redirect('post')->with('success', 'Data berhasil diinput');
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
        $data = Post::find($id);
        $kategori = Kategori::all();
        return view('post/edit', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Post::find($id);

        $validator = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori_id' => 'required'
        ]);

        $data->update($validator);
        return redirect('post')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Post::find($id);
        $data->delete();
        return redirect('post')->with('success', 'Data berhasil dihapus');
    }
}
