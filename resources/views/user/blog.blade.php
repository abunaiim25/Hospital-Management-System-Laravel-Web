@extends('layouts.user_layout')


@section('title')
    News
@endsection


@section('frontend_content')

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <div class="page-banner overlay-dark bg-image"
        style="background-image: url({{ asset('fontend') }}/assets/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">News</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">


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
                                                    <img src="{{ asset('news_image_writer/' . $item->img_writer) }}"
                                                        alt="">
                                                </div>
                                                <span>{{ $item->img_writer_name }}</span>
                                            </div>
                                            <span class="mai-time"></span> {{ $item->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <!-- .row -->
                </div>


                
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-block">

                            <h3 class="sidebar-title">Search News</h3>
                            <form action="{{ url('search_news') }}" method="GET" class="search-form">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input type="text" name="query" id="query" class="form-control" value="{{request()->input('query')}}" placeholder="Search News...">
                                    <button type="submit" class="btn"><span class="icon mai-search"></span></button>
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
                              <h5 class="post-title"><a href="{{ url('news_details', $item->id) }}">{{$item->title}}</a></h5>
                              <div class="meta">
                                <a href="#"><span class="mai-calendar"></span>  {{ $item->created_at->diffForHumans() }}</a>
                                <a href="#"><span class="mai-person"></span> {{ $item->img_writer_name }}</a>
                              
                              </div>
                            </div>
                          </div>
                          @endforeach
                        </div>



                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Paragraph</h3>
                            <p>{{ $item->pragraph }}</p>
                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .page-section -->



    <div class="d-flex justify-content-center  m-5">
        {{--(paginate) ->Providers\AppServiceProvider.php --}}
        {{$news->links()}}
   {{--
        {{$appoint->onEachSide(1)-> links()}}
   --}}
   </div>


@endsection
