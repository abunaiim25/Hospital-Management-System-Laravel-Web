{{-- frontend user --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>
        @yield('title')
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- index --}}
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/maicons.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/theme.css">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    {{-- about --}}
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/maicons.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/theme.css">
    {{-- doctors --}}
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/maicons.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/theme.css">
    {{-- news/blog --}}
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/maicons.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/theme.css">
    {{--news/blog details--}}
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/maicons.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/theme.css">
    {{-- contact --}}
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/maicons.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/theme.css">

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>
    @include('user.user_home_include.header'){{-- nav here --}}

    @yield('frontend_content')

    @include('user.user_home_include.footer')




    <!--https://sweetalert.js.org/guides/-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

    {{-- index --}}
    <script src="{{ asset('fontend') }}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/wow/wow.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/theme.js"></script>
    {{-- about --}}
    <script src="{{ asset('fontend') }}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/wow/wow.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/theme.js"></script>
    {{-- doctors --}}
    <script src="{{ asset('fontend') }}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/wow/wow.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/theme.js"></script>
    {{-- news/blog --}}
    <script src="{{ asset('fontend') }}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/wow/wow.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/theme.js"></script>
    {{--news/blog details--}}
    <script src="{{ asset('fontend') }}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/wow/wow.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/theme.js"></script>
    {{-- contact --}}
    <script src="{{ asset('fontend') }}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/vendor/wow/wow.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/google-maps.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/theme.js"></script>

</body>

</html>
