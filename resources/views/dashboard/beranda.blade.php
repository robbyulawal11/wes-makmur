@extends('template')
@section('main')
    <h1 class="mb-3 text-center">Top Artikel</h1>
    <div class="container d-flex flex-wrap gap-4">
        @foreach ($data as $item)
            <div class="card mb-2" style="width: 25rem; height: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ substr($item->judul, 0, 100) }}</h5>
                    <p class="card-text fs-6">{{ $item->tanggalDibuat }}</p>
                    <p class="card-text">{{ substr($item->isi, 0, 200) }}</p>
                    <a href="{{ url('beranda/detail/' . $item->id) }}" class="btn btn-success">Baca Lengkap</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
