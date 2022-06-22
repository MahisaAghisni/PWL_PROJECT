{{-- @extends('customer.layouts.app')
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
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="time_from">{{ __('Jam Mulai') }}</label>
                                    <input type="text" class="form-control datetimepicker" id="time_from" name="time_from"
                                        value="{{ old('time_from') }}" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="time_to">{{ __('Jam Berakhir') }}</label>
                                    <input type="text" class="form-control datetimepicker" id="time_to" name="time_to"
                                        value="{{ old('time_to') }}" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">{{ __('Booking') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
        </script>
        <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
        <script
                src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
        </script>
        <script>
            $('.datetimepicker').datetimepicker({
                format: 'YYYY-MM-DD HH:mm',
                locale: 'en',
                sideBySide: true,
                icons: {
                    up: 'fas fa-chevron-up',
                    down: 'fas fa-chevron-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right'
                },
                stepping: 10
            });
        </script>
    </body>
@endsection --}}
