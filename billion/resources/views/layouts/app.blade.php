<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--google icon--> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buy_create.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-0 m-0">
            <div class="container-fluid p-0 m-0">
                <a class="navbar-brand pb-2 pl-5 bg-style1" href="{{ url('/') }}" style="background-color: transparent;">
                    <img src="<?php echo asset('img/logo_billion.svg'); ?>" alt="" width="200" height="50" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar --> 
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-0">
                        <li class="nav-item parallelogram m-auto m-lg-1">
                            <a class="">
                                <p class="unpara fc-font-r" style="color:grey;">
                                หน้าแรก
                                </p>
                            </a>
                        </li>
                        <li class="nav-item parallelogram m-auto m-lg-1">
                            <a class="">
                                <p class="unpara fc-font-r" style="color:grey;">
                                ค้นหา
                                </p>
                            </a>
                        </li>
                        <li class="nav-item parallelogram m-auto m-lg-1">
                            <a class="fc-font-r">
                                <p class="unpara fc-font-r" style="color:grey;">
                                รายการแนะนำ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item parallelogram m-auto m-lg-1">
                            <a class="">
                                <p class="unpara fc-font-r" style="color:grey;">
                                ค้นหาเอเจนต์
                                </p>
                            </a>
                        </li>
                        <li class="nav-item parallelogram-yellow shadow-sm m-auto m-lg-1">
                            <a class="">
                                <img src="<?php echo asset('img/plus.svg'); ?>" class="unpara" width="27px" height="27px" style="">
                                <p class="fc-font-r unpara" style="display:inline-block;color:white;">
                                    ลงประกาศ
                                </p>
                            </a>
                        </li>
                    </ul>
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="d-flex justify-content-evenly">
                            <!--Language-->
                            <li class="nav-item m-auto m-lg-1">
                                    <button class="btn mt-2 p-1 ">
                                        <span class="material-icons">
                                        language
                                        </span>
                                    </button>
                            </li>
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link mt-2" style="cursor: pointer; white-space: nowrap;" data-toggle="modal" data-target="#loginModal">{{ __('เข้าสู่ระบบ') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link mt-2" style="cursor: pointer; white-space: nowrap;" data-toggle="modal" data-target="#registerModal">{{ __('สมัครสมาชิก') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item m-auto m-lg-1 justify-content-right">
                                        <button class="btn mt-2 p-1">
                                            <span class="material-icons">
                                                question_answer
                                            </span>
                                        </button>
                                </li>
                                <li class="nav-item m-auto m-lg-1">
                                        <button class="btn mt-2 p-1">
                                            <span class="material-icons">
                                                notifications
                                            </span>
                                        </button>
                                </li>
                        </div>
                        <li class="nav-item dropdown rounded-pill shadow-sm border text-center bg-white m-lg-0 m-3">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="<?php echo asset('img/personEx.jpg'); ?>" class="rounded-circle" width="35px" height="35px" alt="..." style="object-fit:cover">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('auth.login')  <!-- Import Login Modal -->
    @include('auth.register') <!-- Import Register Modal -->

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>