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
                    <a class="nav-link" href="{{ route('finder') }}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bands') }}">Bands</a>
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
            <button type="button"  style="margin-left:82%;margin-bottom:1%" class="shadow-lg btn btn-success" data-toggle="modal" data-target="#BandsModal">Form a Band</button>

            <!-- BAND MODAL -->
            <div class="modal fade" id="BandsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:black">Create a Band</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{ route('bandcont.store') }}">
                                            @csrf
                                                <div class="modal-body">
                                                <div class="form-group">
                                                <x-jet-label for="name" style="color:black" value="Nombre"/>
                                                <x-jet-input id="InputUsername" class="block mt-1 w-full modal-form-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                    </div>

                                                    <div class="form-group">
                                                    <label for="image" value="Band Image" style="color:black">Band Image<br>
                                                    <input type="file" name="image" value="image1" accept="video/*" id="image">
                                                    </div>

                                                    <div class="form-group">
                                                    <label for="musicgenre" value="musicgenre" style="color:black">Music Genre<br>
                                                    <select style="color:black" id="music" name="music">
                                        
                                                        <option>Rock</option>
                                                        <option>Metal</option>
                                                        <option>Hip-hop</option>
                                                        <option>Jazz</option>
                                                        <option>Blues</option>
                                                    <select>
                                                    </div>

                                                    <div class="form-group">
                                                    <label for="description" value="description" style="color:black">Description<br>
                                                    <textarea id="banddescription" name="banddescription" class="block mt-1 w-full"></textarea>
                                                    </div>
                                                </div>
                                                <input type="hidden" value="{{Auth::user()->id}}" name="member">
                                                <div class="modal-footer">
                                                    <button class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button id="AccountButton" class="btn btn-dark">Create</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
            <div class="container navbar-styles">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box no-header clearfix">
                            <div class="main-box-body clearfix">
                                <div class="table-responsive">
                                    <table class="table user-list">
                                        <thead class="text-center">
                                            <tr>
                                            <th><span>Band</span></th>
                                            <th><span>Formed</span></th>
                                            <th><span>Status</span></th>
                                            <th><span>Owner</span></th>
                                            <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            {{-- LOOP STARTS HERE --}}
                                            @foreach($bands as $band)
                                                <td>
                                                    <img src="{{$band->media}}" alt="">
                                                    <a href="#" class="text-danger">{{$band->name}}</a>
                                                    <span class="user-subhead">{{$band->description}}</span>
                                                </td>
                                                <td>{{$band->created_at}}</td>
                                                <td class="text-center">
                                                    <span class="label label-default">pending</span>
                                                </td>
                                                <td>
                                                    <a style="color:#f23a2e" href="#">{{$band->members}}</a>
                                                </td>
                                                <td style="width: 20%;">
                                                    <a href="#" class="table-link danger">
                                                        <span class="fa-stack text-danger">
                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            {{-- LOOP ENDS HERE --}}
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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