<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

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
        <link rel="stylesheet" href="{{ URL::asset('/fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/profile.css') }}">

        <!-- Scripts -->
        <script>
        function confirmDelete(event){
            console.log("Entra2");
            event.preventDefault();
            if (confirm("Are you sure you want to delte your profile?")) {
                document.getElementById('deleteForm').submit();
            } else {

            }
        }
        </script>
        <script src="{{URL::asset('/js/filterscript.js')}}"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    @if(Auth::user()->type == 1)
    <script>
        setTimeout(function(){ location.replace("{{ route('admin') }}"); }, 1);
    </script>
    @else
    <body id="background-image" class="font-sans antialiased">
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
                    <a class="nav-link" href="{{ route('finder') }}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bands') }}">Bands</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filter by:
                    </a>
                    <form id="SearchForm" action="{{ route('users.show', Auth::user()->id) }}" class="form-inline my-2 my-lg-0">
                    <div id="filterDropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <h6 class="dropdown-header text-dark">Instrument</h6>
                        <select id="inst">
                            <option>Any</option>
                            <option>bass</option>
                            <option>guitar</option>
                            <option>drums</option>
                            <option>vocals</option>
                            <option>saxophone</option>
                        </select>
                        <input type="hidden" id="instrument" name="instrument">
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header text-dark">Music genre</h6>
                        <select id="mus">
                            <option>Any</option>
                            <option>Rock</option>
                            <option>Metal</option>
                            <option>Blues</option>
                            <option>Jazz</option>
                            <option>Hip-Hop</option>
                        </select>
                        <input type="hidden" id="music" name="music">
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header text-dark">Localization</h6>
                        <select id="loc">
                            <option>Any</option>
                            <option>Gipuzkoa</option>
                            <option>Bizkaia</option>
                        </select>
                        <input type="hidden" id="location" name="location">
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
                                    <p>{{Auth::user()->description}}</p>
                                </div>
                                <div class="about">
                                <h6>Bandmates</h6>
                                {{-- @foreach(\App\Models\User::all() as $user)
                                <p>{{$user->name}} </p>
                                @endforeach --}}
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
                                    <h6 class="mb-3 text-danger">Details</h6>
                                    <hr class="border border-danger">
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">

                                        <label for="fullName">Name</label>
                                        <h4 id="fullName">{{Auth::user()->name}}</h4>

                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <h4 id="eMail">{{Auth::user()->email}}</h4>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Instrument</label>
                                        <h4 id="instrument">{{Auth::user()->instrument}}</h4>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website">Music</label>
                                        <h4 id="music">{{Auth::user()->music}}</h4>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sTate">Localization</label>
                                        <h4 id="localization">{{Auth::user()->localization}}</h4>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                    <div class="form-group">
                                        <label for="zIp">On a band?</label>
                                        <h4 id="bandmember">{{Auth::user()->bandmember}}</h4>
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

                                        <label for="Street" name="archivo">Video</label>
                                        @if(Auth::user()->archivo == "")
                                        <h4>No video yet</h4>
                                        @else
                                        <video style="width:100%;" controls>
                                            <source src="{{Auth::user()->archivo}}" type='video/mp4'>
                                        </video>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">Audio</label>
                                        @if(Auth::user()->audio == "")
                                        <h4 id="audio">No audio yet</h4>
                                        @else
                                        <br>
                                        <audio style="width:100%" controls>
                                            <source src="{{Auth::user()->audio}}" type="audio/mp3">
                                        </audio>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-danger">Edit or Delete your account</h6>
                                    <hr class="border border-danger">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <a href="profile/edit" style="color:white" name="submit" class="btn btn-warning">Edit</a>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                    <form id="deleteForm" action="{{ route('users.destroy', Auth::user()->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="button" onclick="confirmDelete(event)" id="prueba" name="submitbtn" class="btn btn-danger" value="Delete">
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
    <!-- 
    <script src="{{ URL::asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ URL::asset('/js/aos.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery.sticky.js') }}"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> 
    -->
    <script src="{{ URL::asset('/js/main.js') }}"></script>
    <!-- <script src="{{ URL::asset('/js/validate.js') }}"></script> -->
        @livewireScripts
    </body>
</html>
@endif
