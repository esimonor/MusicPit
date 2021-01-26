<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>MusicPit</title>
    <link rel="shortcut icon" href="images/logo-transparent.png"/>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Muli:300,400,700,900') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/fonts/flaticon/font/flaticon.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/botones.css') }}">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"/>-->

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <!-- Navbar -->
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-20">
                        <a href="#home-section">
                            <img src="images/logo-transparent.png" width="100" height="60" class="d-inline-block align-top" alt="MusicPit">
                        </a>
                    </div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block m-0 p-0">
                                <li><a href="#home-section" class="nav-link">@lang('landing.home')</a></li>
                                <li><a href="#programs-section" class="nav-link">@lang('landing.what')</a></li>
                                <li><a href="#courses-section" class="nav-link">@lang('landing.who')</a></li>
                                <li><a href="#contact-section" class="nav-link">@lang('landing.contact')</a></li>
                                <i class="united states flag"></i>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lang</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="/en">En</a>
                                        <a class="dropdown-item" href="/es">Es</a>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="ml-auto w-25">
                    @if (Route::has('login'))
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <li class="btn btn-danger">
                                @auth
                                <a href="{{ url('/user/profile') }} "class="nav-link"><span style="color:white">{{ Auth::user()->name}}</span></a>
                                @else
                                <a href=""class="nav-link " data-toggle="modal" data-target="#exampleModalCenter"><span style="color:white">@lang('landing.login')</span></a>
                                @endauth
                                @endif

                                </li>
                            </ul>
                        </nav>
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right">
                            <span class="icon-menu h3"></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- End navbar -->

        <div class="intro-section" id="home-section">
            <div class="slide-1" data-stellar-background-ratio="0.5">
            <video autoplay muted loop id="myVideo">
                <source src="video/GojiraSmall.mp4" type="video/mp4">
            </video>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-12 mb-4">
                                    <h1 data-aos="fade-up" data-aos-delay="100">@lang('landing.message')</h1>
                                    <h3 class="mb-4" data-aos="fade-up" data-aos-delay="200">@lang('landing.message2')</h3>

                                    <!-- Modal Login -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">@lang('landing.login')</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                    <div class="modal-body">

                                                        <div class="form-group">
                                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                                        <x-jet-input id="email" class="block mt-1 w-full modal-form-input" type="email" name="email" :value="old('email')" required autofocus />
                                                        {{ $errors->first('email')}}<br>
                                                    </div>
                                                    <div class="form-group">
                                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                                    <x-jet-input id="password" class="block mt-1 w-full modal-form-input" type="password" name="password" required autocomplete="current-password" />
                                                    {{ $errors->first('password')}}<br>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">@lang('landing.remember')</label>
                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-dark">{{ __('Login') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Create account -->
                                <div class="modal fade" id="CreateAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">@lang('landing.create')</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                                <div class="modal-body">
                                                <div class="form-group">
                                                <x-jet-label for="name" value="{{ __('Name') }}" />
                                                <x-jet-input id="InputUsername" class="block mt-1 w-full modal-form-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                    </div>

                                                    <div class="form-group">
                                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                                    <x-jet-input id="InputEmail" class="block mt-1 w-full modal-form-input" type="email" name="email" :value="old('email')" required />
                                                    </div>
                                                    <div class="form-group">
                                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                                    <x-jet-input id="InputPassword1" class="block mt-1 w-full modal-form-input" type="password" name="password" required autocomplete="new-password" />
                                                    </div>
                                                    <div class="form-group">
                                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                                    <x-jet-input id="InputPassword2" class="block mt-1 w-full modal-form-input" type="password" name="password_confirmation" required autocomplete="new-password" />
                                                    </div>
                                                    <div class="form-group">
                                                    <select style="color:black" id="instrument" name="instrument">
                                                        <option>Select instrument</option>
                                                        <option>Bass</option>
                                                        <option>Guitar</option>
                                                        <option>Drums</option>
                                                        <option>Flute</option>
                                                        <option>Keyboard</option>
                                                    <select>
                                                    </div>
                                                    <div class="form-group">
                                                    <select style="color:black" id="music" name="music">
                                                        <option>Music genre</option>
                                                        <option>Rock</option>
                                                        <option>Metal</option>
                                                        <option>Hip-hop</option>
                                                        <option>Jazz</option>
                                                        <option>Blues</option>
                                                    <select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button disabled=true id="AccountButton" type="submit" class="btn btn-dark">{{ __('Register') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-12 ml-auto" >
                                        <button type="button" class="btn btn-danger py-3 px-5 btn-pill btn-large" data-toggle="modal" data-target="#CreateAccountModal">
                                            @lang('landing.create')
                                        </button>
                                        <p style="text-align:center" data-toggle="modal" data-target="#exampleModalCenter">@lang('landing.account2')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About -->
        <div class="site-section intro-background" id="programs-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">@lang('landing.what')</h2>
                        <p>@lang('landing.what2')</p>
                    </div>
                </div>
                <h3>@lang('landing.functionalities')</h3>
                <div class="card-deck">
                    <div class="card" data-aos="fade-up-right" data-aos-delay="">
                        <i class="fas fa-search fa-6x" style="text-align:center"></i>
                        <div class="card-body">
                        <h5 class="card-title border-dark border-bottom">@lang('landing.search')</h5>
                        <p class="card-text"> @lang('landing.search-desc')</p>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-delay="">
                        <i class="fas fa-filter fa-5x" style="text-align:center;padding-top:5%"></i>
                        <div class="card-body">
                        <h5 class="card-title border-dark border-bottom">@lang('landing.filter')</h5>
                        <p class="card-text">@lang('landing.filter-desc')</p>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up-left" data-aos-delay="">
                        <i class="far fa-comment fa-6x" style="text-align:center"></i>
                        <div class="card-body">
                        <h5 class="card-title border-dark border-bottom">@lang('landing.comments')</h5>
                        <p class="card-text">@lang('landing.comments-desc')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Users aproval -->
        <section id="facts">
        <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">@lang('landing.user-dat')</h2>
                <p class="section-description">@lang('landing.user-desc')</p>
                </div>
</div>
                <div class="row counters"> 

                <div class="col-lg-3 col-6 text-center">
                <span class="counter">732</span>
                    <p>@lang('landing.users')</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                <span class="counter">521</span>
                    <p>@lang('landing.bands')</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                <span class="counter">1463</span>
                    <p>@lang('landing.video-hours')</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                <span class="counter">2</span>
                    <p>@lang('landing.workers')</p>
                </div>

                </div>

            </div>
        </section>
    <!-- End of users aproval -->

        <!-- About us -->
        <div class="site-section courses-title" id="courses-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">@lang('landing.who')</h2>
                        <p class="text-white">@lang('landing.who2')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="owl-carousel col-12 nonloop-block-14">
                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <img src="images/icono1.png" alt="Image" class="img-fluid">
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <h3>El JEFE</h3>
                                <p>@lang('landing.job1').</p>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <img src="images/icono2.png" alt="Image" class="img-fluid">
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <h3>Jon imanol</h3>
                                <p>@lang('landing.job2').</p>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <img src="images/ES.png" alt="Image" class="img-fluid">
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <h3>Eneko Simon</h3>
                                <p>@lang('landing.job3').</p>
                            </div>
                        </div>
                    </div>

                    <div class="row w-100 justify-content-center">
                        <button class="customPrevBtn btn btn-danger m-1 border border-dark">&#8592;</button>
                        <button class="customNextBtn btn btn-danger m-1 ml-4 border border-dark">&#8594;</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="site-section bg-light" id="contact-section">
            <div class="container">
            <div class="row mb-5 justify-content-center">
                    <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">@lang('landing.contact')</h2>
                        <p class="mb-5">@lang('landing.contact2')</p>
                    </div>
                        <form method="post" data-aos="fade">
                            <div class="form-group row">
                                <div class="col-md-6 mb-3 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="@lang('landing.name')">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="@lang('landing.surname')">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="@lang('landing.subject')">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea class="form-control" id="" cols="30" rows="10"
                                        placeholder="@lang('landing.write-message')"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-danger py-3 px-5 btn-block btn-pill"
                                        value="@lang('landing.send')">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-section bg-white">
            <div class="container">
                <div class="row w-100 justify-content-center">
                    <a href="https://twitter.com" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                    <a href="https://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                    <a href="https://instagram.com" class="icon-button instagram"><i class="icon-instagram"></i><span></span></a>
                    <a href="https://github.com" class="icon-button github"><i class="icon-github"></i><span></span></a>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="border-top">
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | MusicPit
                            </p>
                        </div>
                    </div>
                    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up fa-2x"></i></a>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ URL::asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ URL::asset('/js/aos.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.sticky.js') }}"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="{{ URL::asset('/js/main.js') }}"></script>
    <script src="{{ URL::asset('/js/validate.js') }}"></script>

</body>
</html>