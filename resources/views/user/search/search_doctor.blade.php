@extends('layouts.user_layout')


@section('frontend_content')

    <div class="container m-5">
        @if ($doctor->count() > 0)

            @include('user.user_home_include.doctor')

            <div class="row">
                <div class="col-md-12 d-flex justify-center mt-5 mb-5">
                    {{ $doctor->appends(request()->input())->links() }}
                </div>
            </div>

        @else
            <div class="card-body text-center p-5 mt-5">
                <h2>Search <i class="fas fa-search"></i> Not Found</h2>
                <a href="{{ url('doctors') }}" class="btn btn-outline-primary float-end">Doctor Here</a>
            </div>
        @endif
    </div>


@endsection
