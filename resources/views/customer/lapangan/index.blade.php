@extends('customer.layouts.app')
@section('content')

    <div class="site-section">
        <div class="container">
            <div class="image-header">
                <img src="{{ asset('storage/' . $arenas->image) }}" alt="">
                <h1>Futsal Sport Centre</h1>
            </div>
            <div class="lapangan">
                <div class="title">
                    <h2>Lapangan {{ $arenas->id }}</h2>
                    <h4><a href="{{ route('detail-lapangan', $arenas->jenis->id) }}">{{ $arenas->jenis->name }}</a>
                    </h4>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{ $arenas->jenis->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lapangan {{ $arenas->id }}</li>
                    </ol>
                </nav>

                <div class="cek-jadwal">
                    <h4>Pilih Tanggal Booking : </h4>
                    <form action="{{ url()->current() }}" method="get">
                        <div class="form-group mb-2">
                            <label for="jadwals">pilih tanggal booking</label>
                            <input type="date" class="form-control " id="jadwals" name="jadwals"
                                value="{{ request('jadwals') }}" />
                        </div>
                        <button type="submit" class="btn btn-primary" value="jadwals">Cek Jadwal</button>
                    </form>
                    @if (isset($jadwals))
                        @if (count($bookings) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered" id="table">
                                    <thead>
                                        <tr>
                                            <th>date</th>
                                            <th>start time</th>
                                            <th>end time</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <td>{{ $booking->date }}</td>
                                                <td>{{ $booking->start_time }}</td>
                                                <td>{{ $booking->end_time }}</td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-info" style="margin-top: 50px">
                                <strong>Belum ada jadwal </strong>
                            </div>
                        @endif
                        <a href="{{ route('booking.lapangan', $arenas->id) }}" class="btn btn-primary">Booking
                            Sekarang</a>
                    @endif

                </div>
            </div>



        </div>
    </div>
@endsection
