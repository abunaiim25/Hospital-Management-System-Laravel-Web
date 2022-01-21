@extends('layouts.user_layout')


@section('title')
Contact Us 
@endsection


@section('frontend_content')
    
 <!-- Back to top button -->
 <div class="back-to-top"></div>

 <div class="page-banner overlay-dark bg-image" style="background-image: url({{ asset('fontend') }}/assets/img/bg_image_1.jpg);">
   <div class="banner-section">
     <div class="container text-center wow fadeInUp">
       <nav aria-label="Breadcrumb">
         <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
           <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
           <li class="breadcrumb-item active" aria-current="page">Contact</li>
         </ol>
       </nav>
       <h1 class="font-weight-normal">Contact</h1>
     </div> <!-- .container -->
   </div> <!-- .banner-section -->
 </div> <!-- .page-banner -->

 <div class="page-section">
   <div class="container">
     <h1 class="text-center wow fadeInUp h1">Get in Touch</h1>

    
     <form class="main-form" action="{{url('appointment')}}" method="POST">
      @csrf

      <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
              <input type="text" name="name" class="form-control" placeholder="Full name" required>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
              <input type="text"  name="email"  class="form-control" placeholder="Email address.." required>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft"    data-wow-delay="300ms">
              <input type="date" name="date" class="form-control" required>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight"  data-wow-delay="300ms">
              <select name="doctor" id="departement" class="custom-select" required>
                  <option value="">---- Seclect Doctor ----</option>
                  @foreach ($doctor as $item)
                  <option value="{{$item->name}}">{{$item->name}} ({{$item->speciality}})</option>
                  @endforeach
              </select>
          </div>

          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
              <input type="text"  name="phone"  class="form-control" placeholder="Number.." required>
          </div>

          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
              <textarea name="message" id="message" class="form-control" rows="6"
                  placeholder="Enter message.." required></textarea>
          </div>
          
      </div>

      <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background: #00D9A5">Submit Request</button>
  </form>
   </div>
 </div>

 <div class="maps-container wow fadeInUp">
   <div id="google-maps"></div>
 </div>


@endsection

 

 

  
