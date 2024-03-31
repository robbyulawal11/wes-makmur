@extends('template')
@section('main')
    <h1>Tambah Kategori</h1>
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" class="form-control @error('namaKategori') is-invalid @enderror" name="namaKategori"
                value="{{ old('namaKategori') }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control @error('descKatrgori') is-invalid @enderror" name="descKatrgori"
                value="{{ old('descKatrgori') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
