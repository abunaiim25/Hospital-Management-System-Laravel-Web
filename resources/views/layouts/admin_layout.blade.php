{{-- admin --}}
<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
   
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/style.css">
    <link rel="shortcut icon" href="{{ asset('admin') }}/assets/images/favicon.png" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>

<body>
    <div class="container-scroller">
      
        @include('admin.admin_home_include.sidebar')
       
        <div class="container-fluid page-body-wrapper">
           
            @include('admin.admin_home_include.navbar')

            <div class="main-panel">

                @yield('admin_content')
{{--
               
                @include('admin.admin_home_include.footer')
--}}
            </div>
        </div>
    </div>



    <script>
        //editors like word
        $(function() {
            'use strict';

            // Inline editor
            var editor = new MediumEditor('.editable');

            // Summernote editor
            $('#summernote').summernote({
                height: 150,
                tooltip: false
            })

        });
    </script>

    <script src="{{ asset('admin') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('admin') }}/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('admin') }}/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('admin') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('admin') }}/assets/js/misc.js"></script>
    <script src="{{ asset('admin') }}/assets/js/settings.js"></script>
    <script src="{{ asset('admin') }}/assets/js/todolist.js"></script>
    <script src="{{ asset('admin') }}/assets/js/dashboard.js"></script>

     <!--https://sweetalert.js.org/guides/-->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     @if (session('status_sweet'))
         <script>
             swal("{{ session('status_sweet') }}");
         </script>
     @endif
</body>

</html>
