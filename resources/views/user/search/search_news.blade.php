@extends('layouts.user_layout')


@section('title')
    News
@endsection


@section('frontend_content')



    <div class="page-section">
        <div class="container">

            @if ($news->count() > 0)

            <div class="row">
                @foreach ($news as $item)
                    <div class="col-sm-6 py-3">
                        <div class="card-blog">
                            <div class="header">
                                <div class="post-category">
                                    <a href="#">{{ $item->category }}</a>
                                </div>
                                <a href="{{ url('news_details', $item->id) }}" class="post-thumb">
                                    <img src="{{ asset('news_image/' . $item->image) }}" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h5 class="post-title"><a
                                        href="{{ url('news_details', $item->id) }}">{{ $item->title }}</a></h5>
                                <div class="site-info">
                                    <div class="avatar mr-2">
                                        <div class="avatar-img">
                                            <img src="{{ asset('news_image_writer/' . $item->img_writer) }}" alt="">
                                        </div>
                                        <span>{{ $item->img_writer_name }}</span>
                                    </div>
                                    <span class="mai-time"></span> {{ $item->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> 

            @else
            <div class="card-body text-center p-5 mt-5">
                <h2>Search <i class="fas fa-search"></i> Not Found</h2>
                <a href="{{ url('news') }}" class="btn btn-outline-primary float-end">News Here</a>
            </div>
        @endif

        </div>


    </div> <!-- .page-section -->

@endsection
