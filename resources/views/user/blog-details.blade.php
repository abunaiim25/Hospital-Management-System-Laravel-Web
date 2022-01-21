@extends('layouts.user_layout')


@section('title')
    News Details
@endsection


@section('frontend_content')

    <!-- Back to top button -->
    <div class="back-to-top"></div>
    <div class="page-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb bg-transparent py-0 mb-5">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('news') }}">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Details</li>
                        </ol>
                    </nav>
                </div>
            </div> <!-- .row -->

            <div class="row">
                <div class="col-lg-8">
                    <article class="blog-details">
                        <div class="post-thumb">
                            <img src="{{ asset('news_image/' . $news->image) }}" alt="">
                        </div>
                        <div class="post-meta">
                            <div class="post-author">
                                <span class="text-grey">By</span> <a href="#">{{ $news->img_writer_name }}</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-date">
                                <a href="#">{{ date('d-m-Y', strtotime($news->created_at)) }}
                                </a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                {{ $news->place }}
                            </div>
                            <span class="divider">|</span>
                            <div class="post-comment-count">
                                <a href="#">8 Comments</a>
                            </div>
                        </div>
                        <h2 class="post-title h1">{{ $news->title }}</h2>
                        <div class="post-content">
                            <p>{{ $news->description }}</p>

                            <p>Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique
                                sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget
                                eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor
                                ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus
                                venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis,
                                quis vulputate</p>
                        </div>

                    </article> <!-- .blog-details -->



                </div>
                <div class="col-lg-4">
                    <div class="sidebar">

                        <div class="sidebar-block">

                            <h3 class="sidebar-title">Search News</h3>
                            <form action="{{ url('search_news') }}" method="GET" class="search-form">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input type="text" name="query" id="query" class="form-control"
                                       {{-- value="{{request()->input('query')}}" --}} placeholder="Search News...">
                                    <button type="submit" class="btn"><span
                                            class="icon mai-search"></span></button>
                                </div>
                            </form>

                        </div>



                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Recent Blog</h3>

                            @foreach ($latest_news as $item)
                                <div class="blog-item">
                                    <a class="post-thumb" href="{{ url('news_details', $item->id) }}">
                                        <img src="{{ asset('news_image/' . $item->image) }}" alt="">
                                    </a>
                                    <div class="content">
                                        <h5 class="post-title"><a
                                                href="{{ url('news_details', $item->id) }}">{{ $item->title }}</a></h5>
                                        <div class="meta">
                                            <a href="#"><span class="mai-calendar"></span>
                                                {{ $item->created_at->diffForHumans() }}</a>
                                            <a href="#"><span class="mai-person"></span>
                                                {{ $item->img_writer_name }}</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>



                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Paragraph</h3>
                            <p> {{ $news->pragraph }}</p>
                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .page-section -->



    <div class="comment-form-wrap container  p-5">
        <div class="w-75  ">
            <h3 class="mb-5 text-center h3">Leave a comment</h3>
            <form action="#" class="">
                <div class="form-row form-group">
                    <div class="col-md-6">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary" style="background: #00D9A5">
                </div>

            </form>
        </div>
    </div>

@endsection
