<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>MusicPit</title>
        <link rel="shortcut icon" href="{{URL::asset('images/logo-transparent.png')}}"/>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fonts -->
        <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Muli:300,400,700,900') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/fonts/flaticon/font/flaticon.css') }}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/botones.css') }}">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"/> -->
        <link rel="stylesheet" href="{{ URL::asset('/css/profile.css') }}">

    </head>
    <body id="background-image">
         <!-- NAVBAR -->
         <nav class="navbar navbar-expand-lg navbar-dark navbar-styles p-2">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="site-logo w-20">
                        <a href="{{ route('welcome') }}">
                            <img src="{{URL::asset('images/logo-transparent-invcolors.png')}}" width="100" height="60" class="d-inline-block align-top" alt="MusicPit">
                        </a>
                    </div>
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('welcome') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('finder') }}">All Users</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filter by:
                    </a>
                    <form class="form-inline my-2 my-lg-0">
                    <div id="filterDropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <h6 class="dropdown-header text-dark">Instrument</h6>
                        <select>
                            <option>Any</option>
                            <option>Bass</option>
                            <option>Guitar</option>
                        </select>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header text-dark">Music genre</h6>
                        <select>
                            <option>Any</option>
                            <option>Rock</option>
                            <option>Metal</option>
                        </select>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header text-dark">Localization</h6>
                        <select>
                            <option>Any</option>
                            <option>Gipuzkoa</option>
                            <option>Bizkaia</option>
                        </select>
                    </div>
                </li>
                </ul>
                
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <form style="margin-left:30%" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a style="color:white;float:right;" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>
                <a style="color:white;float:right; margin-left:2%" href="{{ URL::ROUTE('welcome') }}/user/profile">Profile</a>
            </div>
        </nav>
        <!-- END NAVBAR -->

        <!--Profile body-->
        <div class="container">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="{{Auth::user()->profile_photo_path}}" alt="{{Auth::user()->name}}">
                                    </div>
                                    <h5 class="user-name">{{Auth::user()->name}}</h5>
                                    <h6 class="user-email">{{Auth::user()->email}}</h6>
                                </div>
                                <div class="about">
                                    <h5 class="mb-2 text-danger">About</h5>
                                    <p>User description (gear, what kind of band, years of experience, etc)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                        <form method="POST" action="{{ route('users.update', Auth::user()->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-danger">Details</h6>
                                    <hr class="border border-danger">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">

                                        <label for="fullName">Name</label><br>
                                        <input type="text" name="nombre" value="{{Auth::user()->name}}" id="fullName">

                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label><br>
                                        <input type="text" name="email" value="{{Auth::user()->email}}" id="eMail">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="instrument">Instrument</label><br>
                                        <select id="instrument" name="instrument">
                                            <option>{{Auth::user()->instrument}}</option>
                                            <option>Bass</option>
                                            <option>Guitar</option>
                                            <option>Drums</option>
                                            <option>Flute</option>
                                            <option>Keyboard</option>
                                        <select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="music">Music</label><br>
                                        <select id="music" name="music">
                                            <option>{{Auth::user()->music}}</option>
                                            <option>Rock</option>
                                            <option>Metal</option>
                                            <option>Hip-hop</option>
                                            <option>Jazz</option>
                                            <option>Blues</option>
                                        <select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sTate">Localization</label><br>
                                        <select id="localization">
                                            <option>{{Auth::user()->localization}}</option>
                                            <option>Gipuzkoa</option>
                                            <option>Bizkaia</option>
                                            <option>Sevilla</option>
                                            <option>Murcia</option>
                                            <option>Barcelona</option>
                                        <select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="zIp">On a band?</label><br>
                                        <input type="text" value="" id="band">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-danger">Media</h6>
                                    <hr class="border border-danger">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">


                                        <label for="archivo">Video</label><br>
                                        <input type="file" name="archivo" value="{{Auth::user()->archivo}} "accept="video/*" id="archivo">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="audio">Audio</label><br>
                                        <input type="file" name="audio" value="{{Auth::user()->audio}}" accept="audio/*" id="audio">
                                    </div>
                                </div>
                               
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-danger">Update or Delete your account</h6>
                                    <hr class="border border-danger">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                    <button type="submit" id="submit" name="submit" style="color:white" class="btn btn-success">Update</button>
    
                                    </div>
                                </div>
                        </form>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                    <form action="{{ route('users.destroy', Auth::user()->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="submit" name="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- end profile body -->

    <!-- Scripts -->
    <script>
    $("#filterDropdown").click(function(e){
        e.stopPropagation();
    })
   </script>
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
    <script src="{{ URL::asset('/js/updateValidator.js') }}"></script>
    </body>
</html>