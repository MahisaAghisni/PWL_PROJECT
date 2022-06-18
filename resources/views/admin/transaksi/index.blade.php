@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Kategori
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                                <h4 class="card-title">Data Produk</h4>
                            </div>
                            <div class="col text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                                    Tambah
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hovered" id="table">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama Pemesan</th>
                                        <th>Jenis Lapangan</th>
                                        <th>Lapangan</th>
                                        <th>Tanggal</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th>Sub Total</th>
                                        <th>Metode Pembayaran</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($transactions))
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td align="center">{{ $transaction->id }}</td>
                                                <td>{{ $transaction->bookings->nama }}</td>
                                                <td>{{ $transaction->bookings->arenas->jenis->nama }}</td>
                                                <td>{{ $transaction->bookings->arenas->id }}</td>
                                                <td>{{ $transaction->bookings->date }}</td>
                                                <td>{{ $transaction->bookings->start_time }}</td>
                                                <td>{{ $transaction->bookings->end_time }}</td>
                                                <?php
                                                $sub_total = 0;
                                                $hour = date('h', strtotime(Carbon\Carbon::parse($transaction->bookings->end_time)->format('H:i:s'))) - date('h', strtotime(Carbon\Carbon::parse($transaction->bookings->start_time)->format('H:i:s')));
                                                $total = $hour * $transaction->bookings->arenas->price;
                                                $sub_total += $total;
                                                ?>
                                                <td>{{ $total }}</td>
                                                <td>{{ $transaction->metode_pembayaran }}</td>
                                                <td align="center">

                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" align="center">Tidak ada data</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        @endsection
