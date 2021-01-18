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
        <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
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
                @if (Auth::check())
                <form style="margin-left:30%" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a style="color:white;float:right;" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>
                <a style="color:white;float:right; margin-left:2%" href="{{ URL::ROUTE('welcome') }}/user/profile">Profile</a>
            </div>
                @else
                </div>
            @endif
        </nav>
        <!-- END NAVBAR -->

            <!-- CONTENT -->
            <div class="card-columns user-card">
                @foreach($users as $user)
                @if($user->name == "admin" || $user->type == "1")

                @else
                <div class="card">
                    <img class="card-img-top" style="width:30%;" src="{{$user->profile_photo_path}}" alt="{{$user->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$user->name}}</h5>
                        <p class="card-text">Instrument: {{$user->instrument}}</p>
                        <p class="card-text">Music: {{$user->music}}</p>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

        <!-- scripts -->
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
    <script src="{{ URL::asset('/js/main.js') }}"></script>

    </body>
</html>