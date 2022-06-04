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
                        <label for="number">{{ __('Nomer') }}</label>
                        <input type="text" class="form-control" id="number" placeholder="{{ __('number') }}"
                            name="number" value="{{ old('number', $arena->number) }}" />
                    </div>
                    <div class="form-group">
                        <label for="price">{{ __('Harga per Jam') }}</label>
                        <input type="number" class="form-control" id="price" placeholder="{{ __('price') }}"
                            name="price" value="{{ old('price', $arena->price) }}" />
                    </div>
                    <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                        <label for="photo">Photo</label>
                        <div class="needsclick dropzone" id="photo-dropzone">

                        </div>
                        @if ($errors->has('photo'))
                            <em class="invalid-feedback">
                                {{ $errors->first('photo') }}
                            </em>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="status">{{ __('Status') }}</label>
                        <select name="status" id="status" class="form-control">
                            <option {{ $arena->status == 'Active' ? 'selected' : null }} value="1">Active</option>
                            <option {{ $arena->status == 'In Active' ? 'selected' : null }} value="0">In Active</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                </form>
            </div>
        </div>


        <!-- Content Row -->

    </div>
@endsection
