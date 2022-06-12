@extends('customer.layouts.app')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">{{ $jenisLap->name }}</strong></div>
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
                                <img src="{{ asset('storage/' . $arena->images) }}" alt="Image placeholder"
                                    class="img-fluid" width="100%" style="height:200px">
                            </a>
                            <div class="block-4-text p-4">
                                <h3>{{ $arena->name }}</h3>
                                <p class="mb-0">{{ $arena->price }}</p>
                                <a href="{{ route('booking', $arena->id) }}" class="btn btn-primary mt-2">booking</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row">
        <div class="col-md-6">
        <img src="{{ asset('storage/'.$jenisLap->images) }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6">
        <h2 class="text-black">{{ $jenisLap->name }}</h2>
        <p>
            {{ $jenisLap->description }}
        </p>

        <div class="mb-5">
            <form action="" method="post">
                @csrf
                @if (Route::has('login'))
                    @auth
                        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                    @endauth
                @endif
            <input type="hidden" name="foods_id" value="">
            <div class="input-group mb-3" style="max-width: 120px;">
            <div class="input-group-prepend">
            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
            </div>
            <input type="text" name="quantity" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append">
            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
            </div>
        </div>

        </div>
        <p><button type="submit" class="buy-now btn btn-sm btn-primary">Add To Cart</button></p>
        </form>
        </div>
    </div> --}}
        </div>
    </div>
@endsection
