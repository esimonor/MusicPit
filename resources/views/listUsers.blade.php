<!-- NOT IN USE -->
<!DOCTYPE html>
<html>
<head>
    <title>MusicPit</title>
    <link rel="shortcut icon" href="{{URL::asset('images/logo-transparent.png')}}"/>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/jquery-ui.css') }}">        
    <link rel="stylesheet" href="{{ URL::asset('/css/listUsers.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <!-- Admin styles and scripts -->
    <link rel="stylesheet" href="{{ URL::asset('/css/profile.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
@if(Auth::user()->type == 0)
    <!-- <img src="https://i.ytimg.com/vi/4WS2nAx7e54/hqdefault.jpg">
    <b>TIENES 3 SEGUNDOS PARA ABANDONAR LA PAGINA</b> -->
    <b>Wrong URL, redirecting...</b>
    <script>
        setTimeout(function(){ location.replace("{{ route('welcome') }}"); }, 100);
    </script>
    @else
    <body style="background-color: #333">
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

<div class="container mt-3 mb-4">
<div class="col-lg-9 mt-4 mt-lg-0">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
          <table class="table manage-candidates-top mb-0">
            <thead>
              <tr>
                <th>User Name</th>
                <th class="text-center">Email</th>
                <th class="action text-right">Action</th>
              </tr>
            </thead>
            <tbody>
            <!-- starts here -->
            @foreach($users as $user)
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="{{$user->profile_photo_path}}" alt="{{$user->name}}">
                  </div>
                  <form method="POST" action="{{route('users.update',[$user->id])}}">
                    @csrf
                    @method('PUT')
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><input name="nombre" class="text-dark" value="{{$user->name}}"></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pr-1"></i>Instrument : <input name="instrument" value="{{$user->instrument}}"></li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Music genre: <input name="music" value="{{$user->music}}"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                    <input class="candidate-list-time order-1" name="email" style="color:black"value="{{$user->email}}">
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-primary" data-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                    <li><button style="background-color:#0d0d0e;border:none;" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button></li>
                </form>
                    <form action="{{route('users.destroy',[$user->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <li><button style="background-color:#0d0d0e;border:none;"><i class="far fa-trash-alt"></i></button></li>
                    </form>
                  </ul>
                </td>
              </tr>
              @endforeach
              <!-- end here -->

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{ URL::asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/js/main.js') }}"></script>
@endif
</body>
</html>