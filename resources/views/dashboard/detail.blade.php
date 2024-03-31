@extends('template')
@section('main')
    <div class="container px-5">
        <div class="w-75 mx-auto">
            <h1>{{ $data->judul }}</h1>
            <p class="card-text fs-6">{{ $data->tanggalDibuat }}</p>
            <p class="card-text">{{ $data->isi }}</p>
        </div>
        <hr class="mt-5">
        <h1 class="text-center">Rekomendasi Produk</h1>
        <div class="d-flex justify-content-center mt-3">
            @foreach ($produk as $item)
                <div class="card me-3" style="width: 18rem;">
                    <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top w-100 h-75" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->namaProduk }}</h5>
                        <p class="card-text">{{ $item->descProduk }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
