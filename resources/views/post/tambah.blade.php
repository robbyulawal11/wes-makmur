@extends('template')
@section('main')
    <h1>Tambah Post</h1>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                value="{{ old('judul') }}">
        </div>
        <div class="form-group">
            <label>Isi</label>
            <input type="text" class="form-control @error('isi') is-invalid @enderror" name="isi"
                value="{{ old('isi') }}">
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
