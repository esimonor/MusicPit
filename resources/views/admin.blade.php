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

        <!-- Admin styles and scripts -->
        <style>
            option{
                color:black;
            }
        </style>
        <link rel="stylesheet" href="{{ URL::asset('/css/profile.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/listUsers.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('/js/AdminValidate.js')}}"></script>
    </head>
    @if(Auth::user()->type == 0)
    <!-- <img src="https://i.ytimg.com/vi/4WS2nAx7e54/hqdefault.jpg">
    <b>TIENES 3 SEGUNDOS PARA ABANDONAR LA PAGINA</b> -->
    <b>Wrong URL, redirecting...</b>
    <script>
        setTimeout(function(){ location.replace("{{ route('welcome') }}"); }, 100);
    </script>
    @else
    <body id="body" style="background-color: #333">
       <!-- Header -->
        <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
        <div class="container bootstrap snippets bootdey">
            <div class="navbar-header">
            <button style="display:none" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <a href="{{ route('welcome') }}"><img src="{{URL::asset('images/logo-transparent-invcolors.png')}}" width="100" height="60" class="d-inline-block align-top" alt="MusicPit"></a>
            </div>
            <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                
                <li class="dropdown">
                <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                    <i class="glyphicon glyphicon-user"></i> {{Auth::user()->name}} <span class="caret"></span></a>
                <ul id="g-account-menu" class="dropdown-menu" role="menu">
                    <li><a href="{{ route('adminUser') }}">My Profile</a></li>
                    <!-- Authentication -->
                    <li><form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a id="logout" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                        </form>
                    </li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
        <!-- /container -->
        </div>
        <!-- /Header -->

        <!-- Main -->
        <div class="container bootstrap snippets bootdey">
        
        <!-- upper section -->
        <div class="row">
            <div class="col-md-3">
            <!-- left -->
            <a class="text" href="#"><strong><i class="glyphicon glyphicon-briefcase"></i> Toolbox</strong></a>
            <hr>
            
            <ul class="nav nav-pills nav-stacked">
                <li><a class="text" href="#"><i class="glyphicon glyphicon-flash"></i> Alerts</a></li>
                <li><a class="text" href="#"><i class="glyphicon glyphicon-link"></i> Links</a></li>
                <li><a class="text" href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
                <li><a class="text" href="#"><i class="glyphicon glyphicon-book"></i> Books</a></li>
                <li><a class="text" href="#"><i class="glyphicon glyphicon-briefcase"></i> Tools</a></li>
                <li><a class="text" href="#"><i class="glyphicon glyphicon-time"></i> Real-time</a></li>
                <li><a class="text" href="#"><i class="glyphicon glyphicon-plus"></i> Advanced..</a></li>
            </ul>
            
            <hr>
            
            </div><!-- /span-3 -->
            <div class="col-md-9">   	
            <!-- column 2 -->	
            <a class="text" href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>     
            <hr>
            <div class="row">
                    <!-- center left-->	
                    <div class="col-md-7">
                    <div class="well" style="color:black">Welcome {{Auth::user()->name}} </div>
                    
                    <hr>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Processing Status</h4></div>
                        <div class="panel-body">
                            
                            <small style="color:black">Verified users</small>
                            <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                <span style="color:lime" class="sr-only">72% Complete</span>
                            </div>
                            </div>
                            <small style="color:black">Uncomplete profiles</small>
                            <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span style="color:lightyellow" class="sr-only">35% Complete</span>
                            </div>
                            </div>
                            <small style="color:black">Unverified users</small>
                            <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                <span style="color:red" class="sr-only">10% Complete</span>
                            </div>
                            </div>

                        </div><!--/panel-body-->
                    </div><!--/panel-->    
                    <div class="panel-heading"><h4>All users</h4></div>                 
                    <table style="border:1px solid white; width:150%;text-align:center;">
                        <tr>
                            <td>Email</td>
                            <td>Instrument</td>
                            <td>Music</td>
                            <td>Type</td>
                            <td>Name</td>
                            <td>Description</td>
                            <td>Action</td>
                        </tr>
                        @foreach($users as $user)
                        <form name="myForm" method="POST" action="{{route('users.update',[$user->id])}}">
                        @csrf
                        @method('PUT')
                        <tr>
                            <td><img class="img-fluid" src="{{$user->profile_photo_path}}" alt="{{$user->name}}"><input style="color:black;" name="email" class="email" value="{{$user->email}}"></td>
                            <td><select style="color:black" class="instrument" name="instrument">
                                            <option>{{$user->instrument}}</option>
                                            <option>Bass</option>
                                            <option>Guitar</option>
                                            <option>Drums</option>
                                            <option>Flute</option>
                                            <option>Keyboard</option>
                                        <select></td>
                            <td><select style="color:black" class="music" name="music">
                                            <option>{{$user->music}}</option>
                                            <option>Rock</option>
                                            <option>Metal</option>
                                            <option>Hip-hop</option>
                                            <option>Jazz</option>
                                            <option>Blues</option>
                                        <select></td>
                                        @if($user->type == 1)
                                        <td><p>Admin</p></td>
                                        @else
                                        <td><p>User</p></td>
                                        @endif
                            <td><input style="color:black" class="nombre" name="nombre" value="{{$user->name}}"></td>
                            <td><textarea style="color:black" class="description" name="description">{{$user->description}}</textarea></td>
                            <td>
                                <button style="background-color:transparent;border:none;" class="text-info editUser" data-toggle="tooltip" title="" data-original-title="Edit"><i class="glyphicon glyphicon-pencil"></i></button>
                            </form>
                                <form action="{{route('users.destroy',[$user->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button style="background-color:transparent;border:none;"><i class="glyphicon glyphicon-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        </form>
                        @endforeach
                    </table>
                    </div><!--/col-->
                
                    <!--center-right-->
                    <div class="col-md-5">
                    
                        <ul class="nav nav-justified">
                            <li><a class="text" href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
                            <li><a class="text" href="#"><i class="glyphicon glyphicon-heart"></i></a></li>
                            <li><a class="text" href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                        </ul>  
                    
                        <hr>  
                        <hr>
                    
                        <div class="btn-group btn-group-justified">
                        <a href="#" class="btn btn-info col-sm-3 text">
                            <i class="glyphicon glyphicon-plus"></i><br>
                            Service
                        </a>
                        <a href="#" class="btn btn-info col-sm-3 text">
                            <i class="glyphicon glyphicon-cloud"></i><br>
                            Cloud
                        </a>
                        <a href="{{ route('adminUser') }}" class="btn btn-info col-sm-3 text">
                            <i class="glyphicon glyphicon-cog"></i><br>
                            Tools
                        </a>
                        <a href="#" class="btn btn-info col-sm-3 text">
                            <i class="glyphicon glyphicon-question-sign"></i><br>
                            Help
                        </a>
                    </div>    
                    </div><!--/col-span-6-->
            </div><!--/row-->
            </div><!--/col-span-9-->
        </div><!--/row-->
        <!-- /upper section -->
        </div><!--/container-->
        <!-- /Main -->  
    </body>
    @endif
</html>