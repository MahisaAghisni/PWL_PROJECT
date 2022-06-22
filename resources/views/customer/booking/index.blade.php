@extends('customer.layouts.app')
@section('content')

    <body class="antialiased">
        <nav class="navbar navbar-light bg-primary d-flex justify-content-center">
            <a class="navbar-brand text-white" href="/">Booking Futsal</a>
        </nav>
        <div class="container my-5">

            @if (session()->has('message'))
                <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert"
                    id="alert-message">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">{{ __('create booking') }}</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('booking.store') }}" method="POST">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="date">pilih tanggal booking</label>
                                    <input type="date" class="form-control @error('date') is-invalid @enderror"
                                        id="date" name="date" value="{{ old('date') }}" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_time">{{ __('Jam Mulai') }}</label>
                                    <input type="time" class="form-control @error('start_time') is-invalid @enderror"
                                        id="start_time" name="start_time" value="{{ old('start_time') }}" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_time">{{ __('Jam Selesai') }}</label>
                                    <input type="time" class="form-control @error('end_time') is-invalid @enderror"
                                        id="end_time" name="end_time" value="{{ old('end_time') }}" />
                                </div>
                                <input type="hidden" id="arenas_id" name="arenas_id" value="{{ $arenas->id }}">

                                <button type="submit" class="btn btn-primary">{{ __('Booking') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
