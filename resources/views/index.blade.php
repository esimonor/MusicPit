<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Cambay' rel='stylesheet'>
    <title>FINAL PROYECT - LANDING PAGE [Eneko]</title>
  </head>
  <body>
  	<!-- navbar -->
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<!-- <a class="navbar-brand" href="#"> -->
  	  <img src="img/logo-transparent-invcolors.png" width="100" height="60" alt="MusicPit" loading="lazy">
	  <!-- MusicPit</a> -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#about">About MusicPit</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Contact</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Languaje
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#">En</a>
	          <a class="dropdown-item" href="#">Es</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>

  	<!-- video -->
	<video autoplay muted loop id="myVideo">
		<source src="video/GojiraSmall.mp4" type="video/mp4">
	</video>

	<!-- overlay text -->
	<div class="content">
		<h1>MusicPit</h1>
		<p>The ultimate social media to find other musicians and jam together</p>
		<p><b>Start jamming with musicians near you TODAY!</b></p>
		<button type="button" class="btn btn-dark btn-lg CallToAction" data-toggle="modal" data-target="#exampleModal">Create Account</button>
		<p><a data-toggle="modal" data-target="#exampleModal">Already have an account? Click here to log in</a></p>
	</div>
	<!-- MODAL -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">New account</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Name:</label>
	            <input type="text" class="form-control">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Email:</label>
	            <input type="email" class="form-control">
	          </div>
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Password:</label>
	            <input type="password" class="form-control">
	          </div>
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Confirm password:</label>
	            <input type="password" class="form-control">
	          </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Create account</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- END MODAL -->
	<!-- <div id="about">
		<h3>MusicPit is a social media for musicians!</h3>
		<p>Whether you are a professional musician or just like to jam with some people this is the page for you, with people for all around the globe you can find anyone anywhere to form a band, or just play some tunes for fun!</p>
	</div> -->
    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    
  </body>
</html>