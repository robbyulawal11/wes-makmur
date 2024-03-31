@extends('template')
@section('main')
    <h1>Kategori</h1>
    <a href="{{ route('kategori.create') }}" class="btn btn-success">Tambah Data</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->namaKategori }}</td>
                    <td>{{ $item->descKatrgori }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kategori.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
