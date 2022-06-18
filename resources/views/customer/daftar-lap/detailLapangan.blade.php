@extends('customer.layouts.app')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">{{ $jenisLap->nama }}</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="image-header">
                <img src="{{ asset('storage/' . $jenisLap->images) }}" alt="">
                <h1>{{ $jenisLap->name }}</h1>
                <p>Futsal Sport Centre</p>
            </div>
            <div class="daftar-lapangan">
                @foreach ($arenas as $arena)
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <a href="">
                                <img src="{{ asset('storage/' . $arena->image) }}" alt="Image placeholder"
                                    class="img-fluid" width="100%" style="height:200px">
                            </a>
                            <div class="block-4-text p-4">
                                <h3>{{ $arena->name }}</h3>
                                <p class="mb-0">Lapangan Nomor : {{ $arena->id }}</p>
                                <p class="mb-0">Harga : {{ $arena->price }} Per Jam</p>
                                <a href="{{ route('cek-lapangan', $arena->id) }}" class="btn btn-primary mt-2">booking</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
