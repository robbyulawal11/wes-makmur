@extends('template')
@section('main')
    <h1>Edit Post</h1>
    <form action="{{ route('post.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                value="{{ $data->judul }}">
        </div>
        <div class="form-group">
            <label>Isi</label>
            <input type="text" class="form-control @error('isi') is-invalid @enderror" name="isi"
                value="{{ $data->isi }}">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori_id">
                <option>Pilih Kategori</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}" @selected($item->id == $data->kategori_id)>{{ $item->namaKategori }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
