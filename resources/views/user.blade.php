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
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"/> -->
        <link rel="stylesheet" href="{{ URL::asset('/css/profile.css') }}">

    </head>
    <body id="background-image">
       <!--navbar
       <header class="site-navbar py-4 js-sticky-header site-navbar-target border-bottom border-danger" role="banner">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-20">
                        <a>
                            <img src="{{URL::asset('images/logo-transparent-invcolors.png')}}" width="100" height="60" class="d-inline-block align-top" alt="MusicPit">
                        </a>
                    </div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block m-0 p-0">
                                <li><a href="#home-section" class="nav-link">Profile</a></li>
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
        End navbar -->

        <!--Profile body-->
        <div id="home-user">
            <div class="container">
                <div class="row gutters">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="account-settings">
                                    <div class="user-profile">
                                        <div class="user-avatar">
                                            <img src="/images/icono3.png" alt="Maxwell Admin">
                                        </div>
                                        <h5 class="user-name">Username</h5>
                                        <h6 class="user-email">email@example.com</h6>
                                    </div>
                                    <div class="about">
                                        <h5 class="mb-2 text-primary">About</h5>
                                        <p>User description (gear, what kind of band, years of experience, etc)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mb-3 text-primary">Details</h6>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName">Name</label>
                                            <h4 id="fullName">Username</h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">Email</label>
                                            <h4 id="eMail">email@example.com</h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Instrument</label>
                                            <h4 id="instrument">Drums, guitar</h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="website">Music</label>
                                            <h4 id="music">Classic rock, blues</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mb-3 text-primary">Media</h6>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="Street">Video</label>
                                            <h4 id="video">No video yet</h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="ciTy">Audio</label>
                                            <h4 id="audio">No audio yet</h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="sTate">Localization</label>
                                            <h4 id="localization">No localization set</h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="zIp">On a band?</label>
                                            <h4 id="band">No</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">
                                            <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                                            <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- end profile body -->
    </body>
</html>