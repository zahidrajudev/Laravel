<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand navbar-light bg-white box-shadow-header sticky-top">
            <div class="container-fluid">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <div class="d-none d-md-inline">
                        <img src="{{ asset('logo/cvlogo4.webp') }}" alt="">
                    </div>
                    <div class="d-sm-none mr-n-13">
                        <img src="{{ asset('logo/cvlogo5.webp') }}" alt="">
                    </div>

                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                        </li>
                    </ul>

                    {{-- Middle for tab and Pc Start--}}
                    <div class="d-none d-md-inline">
                        <a href="{{ route('pending') }}" class="button-17">PDF to Image Convert</a>
                    </div>
                    <div class="d-none d-md-inline">
                        <a href="{{ route('contact') }}" class="button-17">Contact</a>
                    </div>
                    <div class="d-none d-md-inline ">
                        <a href="{{ route('cvdata') }}" class="button-17">CV Profile</a>
                    </div>
                    {{-- Middle for tab and Pc End--}}

                    {{-- Middle for Mobile start --}}
                    <div class="dropdown d-sm-none">
                        <button class="btn btn-secondary dropdown-toggle button-17" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li> <a href="{{ route('cvdata') }}" class="dropdown-item">CV Profile</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#">PDF to Image Convert</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="{{ route('contact') }}">Contact With Admin</a></li>
                            <hr>
                        </ul>
                    </div>
                    {{-- Middle for Mobile End --}}
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto d-none d-md-inline">
                        <!-- Authentication Links -->

                        {{-- For Tab and Pc Device Start--}}

                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item d-inline">
                            <a class="button-17" href="{{ route('login') }}">{{
                                __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item d-inline">
                            <a class="button-17" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle button-17 mr-15" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                v-pre>
                                {{ Auth::user()->name}}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                    {{-- For Tab and Pc Device End--}}

                    {{-- For Mobile Device Start--}}
                    <div class="dropdown d-sm-none">
                        <button class="btn btn-secondary dropdown-toggle button-17" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                            @guest
                            Menu
                            @endguest

                            @auth
                            {{ Str::limit(Auth::user()->name,8) }}
                            @endauth

                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('login') }}">{{
                                    __('Login') }}</a>
                            </li>
                            <hr>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            <hr>
                            @endif
                            @else
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @endguest
                        </ul>
                    </div>
                    {{-- For Mobile Device End--}}
                </div>
        </nav>

        {{-- Notification start --}}
        <div class="container position-absolute">
            <div class="row pt-5">
                <div class="col-5 col-lg-4 position-relative" style="z-index:10">
                    @include('partials.success_message')
                    @include('partials.error_message')
                </div>
            </div>
        </div {{-- Notification End --}} <main class="py-2">
        @yield('content')
        </main>
    </div>
    {{--new body start --}}
    <div class="container-fluid">
        @yield('body')
    </div>
    {{--new body End --}}

    {{-- Banner Start --}}
    <div class="container-fluid">
        <div class="row">
            @yield('banner')
        </div>
    </div>
    {{-- Banner End --}}
    {{-- style-1 Start--}}
    {{-- Main Body Layout Start --}}
    <div class="container-fluid">
        <div class="row">

            {{-- Left side of body Start --}}
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                @yield('left')
            </div>
            {{-- Left side of body End --}}

            {{-- Middle of body Start --}}

            <div class="col-lg-6 col-md-6 col-sm-12">
                @yield('middle')

            </div>
            {{-- Middle of body End --}}

            {{-- Right side of body Start --}}

            <div class="col-lg-3 col-md-6 col-sm-12 ">
                @yield('right')

            </div>
            {{-- Right side of body End --}}

        </div>
    </div>
    {{-- Main Body Layout End --}}
</body>
<footer>
    @yield('script')
    <div class="card ">
        <div class="row align-items-center">
            <div class="col-5">
                <img src="{{ asset('logo/zahidraju.webp') }}" alt="" style="height: 80px;">
            </div>
            <div class="col-7">
                <p class="fs-5">Designed and built this web Application by <span
                        class="badge rounded-pill bg-warning text-dark">Zahid
                        Raju</span></p>
            </div>
        </div>
    </div>
</footer>

</html>