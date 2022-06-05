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
                    <a href="/arena" class="btn btn-primary btn-sm shadow-sm">Go Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="/arena" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="id">Nomor</label>
                        <input type="text" name="id" class="form-control" id="id" aria-describedby="id">
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="text" name="price" class="form-control" id="price" aria-describedby="price">
                    </div>
                    <div class="form-group">
                        <label for="image">gambar</label>
                        <input type="file" class="form-control" required="required" name="image">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">In Active</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>


        <!-- Content Row -->

    </div>
@endsection
