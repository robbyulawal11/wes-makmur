@extends('template')
@section('main')
    <h1 class="mb-3 text-center">Top Article</h1>
    <div class="container d-flex flex-wrap gap-4">
        @foreach ($data as $item)
            <div class="card mb-2" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text fs-6">{{ $item->tanggalDibuat }}</p>
                    <p class="card-text">{{ substr($item->isi, 0, 50) }}</p>
                    <a href="{{ url('beranda/detail/' . $item->id) }}" class="btn btn-success">Baca Lengkap</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
