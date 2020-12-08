<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Cambay' rel='stylesheet'>
    <title>FINAL PROYECT - LANDING PAGE [Eneko]</title>

	<!-- Scripts -->
	<script src="JS/jquery-3.5.1.slim.min.js"></script>
	<script src="JS/jquery.min.js"></script>
	<script src="JS/fadeScript.js"></script>
  </head>
  <body>
  	<!-- navbar -->
  	<nav class="navbar navbar-expand-lg navbar-dark navbarColors">
  		<!-- <a class="navbar-brand" href="#"> -->
  	  <img class="home" src="img/logo-transparent-invcolors.png" width="100" height="60" alt="MusicPit" loading="lazy">
	  <!-- MusicPit</a> -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" class="home">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" id="about">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" data-toggle="modal" data-target="#LoginModal">Login</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Languaje
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item">En</a>
	          <a class="dropdown-item">Es</a>
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
		<p><a data-toggle="modal" data-target="#LoginModal">Already have an account? Click here to log in</a></p>
	</div>
	<!-- hidden overlay text -->
	<div class="about">
		<h1>About</h1>
		<h3>MusicPit is a social media for musicians!</h3>
		<p>Whether you are a professional musician or just like to jam with some people this is the page for you, with people for all around the globe you can find anyone anywhere to form a band, or just play some tunes for fun!</p>
	</div>
	<!-- CREATE ACCOUNT MODAL -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header darkModal">
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
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-secondary">Create account</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- END CREATE ACCOUNT MODAL -->

	<!-- Login MODAL -->
	<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header darkModal">
	        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
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
	            <label for="message-text" class="col-form-label">Password:</label>
	            <input type="password" class="form-control">
	          </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-secondary">Create account</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- END Login MODAL -->

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    
  </body>
</html>