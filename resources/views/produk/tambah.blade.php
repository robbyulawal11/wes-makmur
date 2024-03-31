@extends('template')
@section('main')
    <h1>Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control @error('namaProduk') is-invalid @enderror" name="namaProduk"
                value="{{ old('namaProduk') }}">
        </div>
        <div class="form-group">
            <label>Foto</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                value="{{ old('harga') }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control @error('descProduk') is-invalid @enderror" name="descProduk"
                value="{{ old('descProduk') }}">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori_id">
                <option>Pilih Kategori</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->namaKategori }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
