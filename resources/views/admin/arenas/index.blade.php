@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('arena') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('admin.arenas.create') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New arena') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-arena" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>No</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($arenas as $arena)
                                <tr data-entry-id="{{ $arena->id }}">
                                    <td>
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $arena->number }}</td>
                                    <td>Rp{{ number_format($arena->price, 2, ',', '.') }}</td>
                                    <td>
                                        {{-- @if ($arena->photo)
                                            <a href="{{ $arena->photo->getUrl() }}" target="_blank">
                                                <img src="{{ $arena->photo->getUrl() }}" width="50px" height="50px">
                                            </a>
                                        @endif --}}
                                    </td>
                                    <td>{{ $arena->status }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('admin.arenas.edit', $arena->id) }}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form onclick="return confirm('are you sure ? ')" class="d-inline"
                                                action="{{ route('admin.arenas.destroy', $arena->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"
                                                    style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                {{-- @empty
                                    <tr>
                                        <td colspan="7" class="text-center">{{ __('Data Empty') }}</td>
                                    </tr> --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    </div>
@endsection
