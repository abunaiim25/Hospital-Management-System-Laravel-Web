<div class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp h1">Latest News</h1>

        <div class="row mt-5">

            @foreach ($latest_news as $item)

                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">{{ $item->category }}</a>
                            </div>
                            <a href="{{ url('news_details',$item->id) }}" class="post-thumb">
                                <img src="{{ asset('news_image/' . $item->image) }}" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="{{ url('news_details',$item->id) }}">{{ $item->title }}</a></h5>
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

            <div class="col-12 text-center mt-4 wow zoomIn">
                <a href="{{url('news')}}" class="btn btn-primary">Read More</a>
            </div>

        </div>

    </div>
</div> <!-- .page-section -->
