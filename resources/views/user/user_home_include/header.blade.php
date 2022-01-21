<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><span class="text-primary">Health</span>-Center</a>



            {{-- change --}}
            {{-- @yield('search') --}}
            <form action="{{ url('search_doctor') }}" method="GET">
                {{ csrf_field() }}
                <div class="input-group input-navbar">
                    <input type="text" name="query" id="query" class="form-control" {{-- value="{{request()->input('query')}}" --}}  placeholder="Search Doctor..."
                        aria-label="Username" aria-describedby="icon-addon1">
                        <button type="submit" class="btn btn-outline-light" style="background: #00D9A5"><span class="mai-search"></span></button>
                </div>
            </form>



            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('about')}}">About Us</a>
                    </li>
                    <li class="nav-item {{ Request::is('doctors') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('doctors')}}">Doctors</a>
                    </li>
                    <li class="nav-item {{ Request::is('news') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('news')}}">News</a>
                    </li>
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('contact')}}">Contact</a>
                    </li>

                    {{-- change --}}
                    @if (Route::has('login'))
                        @auth

                            <li class="nav-item">
                                <a class="nav-link" style="background: #00D9A5;color:white"
                                    href="{{ url('my_appointment') }}">My Appointment</a>
                            </li>

                            <!--user profile logout-->
                            <x-app-layout>
                            </x-app-layout>

                        @else

                            <li class="nav-item m-1">
                                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                            </li>

                            <li class="nav-item m-1">
                                <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                            </li>

                        @endauth
                    @endif





                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>
