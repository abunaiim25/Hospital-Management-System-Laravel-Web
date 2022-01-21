{{--
@section('search')
    <form action="{{url('doctor_search')}}" method="GET"> 
        {{csrf_field()}}
        <div class="input-group input-navbar">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" name="search" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                aria-describedby="icon-addon1">
        </div>
    </form>
@endsection
--}}


<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp h1">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach ($doctor as $item)
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img style="height: 300px"  src="upload_image/{{$item->image}}" alt="">
                        
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{$item->name}}</p>
                        <p><span  class="text-sm text-grey">Speciality: {{$item->speciality}}</span></p>
                        <p><span  class="text-sm text-grey">Phone: {{$item->phone}}</span></p>
                        <span class="text-sm text-grey">Room No: {{$item->room}}</span>
                    </div>
                </div>
            </div>
            
            @endforeach

           
        </div>
    </div>
</div>