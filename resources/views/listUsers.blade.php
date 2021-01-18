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

<body>
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
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">{{$user->name}}</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pr-1"></i>Instrument: {{$user->instrument}}</li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Music: {{$user->music}}</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                    <span class="candidate-list-time order-1">{{$user->email}}</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-primary" data-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
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
</body>
</html>