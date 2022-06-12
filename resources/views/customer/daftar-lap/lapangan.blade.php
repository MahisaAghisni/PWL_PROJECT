@extends('customer.layouts.app')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">{{ $arenas->nama }}</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="image-header">
                <img src="{{ asset('storage/' . $arenas->images) }}" alt="">
                <h1>{{ $arenas->nama }}</h1>
                <p>Futsal Sport Centre</p>
            </div>
            <div class="daftar-lapangan">
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border">
                        <a href="">
                            <img src="{{ asset('storage/' . $arenas->images) }}" alt="Image placeholder"
                                class="img-fluid" width="100%" style="height:200px">
                        </a>
                        <div class="block-4-text p-4">
                            <h3>{{ $arenas->nama }}</h3>
                            <p class="mb-0">{{ $arebas->price }}</p>
                            <a href="" class="btn btn-primary mt-2">Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
