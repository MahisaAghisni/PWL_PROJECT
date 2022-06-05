@extends('layouts.main')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create arena') }}</h1>
                    <a href="{{ route('admin.arenas.index') }}"
                        class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.arenas.update', $arena->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="id">id</label>
                        <input type="text" class="form-control" id="id" value="{{ $arena->id }}" aria- describedby="id">
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="number" class="form-control" id="price" value="{{ $arena->price }}" aria-
                            describedby="price">
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" required="required" name="image"
                            value="{{ $arena->image }}">
                        <img width="150px" src="{{ asset('storage/' . $arena->image) }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option {{ $arena->status == 'Active' ? 'selected' : null }} value="1">Active</option>
                            <option {{ $arena->status == 'In Active' ? 'selected' : null }} value="0">In Active</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </form>
            </div>
        </div>


        <!-- Content Row -->

    </div>
@endsection
