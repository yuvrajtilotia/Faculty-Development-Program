<!DOCTYPE html>
<html>
	<head>
		<title>Home | Faculty Learning Portal</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	</head>


	<body>
	
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="index.php">Faculty Learning Portal</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<ul class="navbar-nav ml-auto">
	    			<li class="nav-item">
    	    			<a class="nav-link" href="index.php">Home</a>
	    			</li>
    				<li class="nav-item">
        				<a class="nav-link" href="register.php">Register</a>
    				</li>
    				<li class="nav-item">
        				<a class="nav-link" href="login.php">Login</a>
    				</li>
    				<li class="nav-item">
        				<a class="nav-link" href="aboutus.php">About Us</a>
    				</li>
    			</ul>
			</div>
		</nav>
		
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
    			<li data-target="#demo" data-slide-to="0" class="active"></li>
    			<li data-target="#demo" data-slide-to="1"></li>
    			<li data-target="#demo" data-slide-to="2"></li>
  			</ul>
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img src="images/HTML.jpg" alt="HTML" width="1100" height="500">
		    			<div class="carousel-caption">
        					<h3></h3>
        					<p></p>
      					</div>   
    			</div>
    			<div class="carousel-item">
      				<img src="images/CSS.jpg" alt="CSS" width="1100" height="500">
      					<div class="carousel-caption">
        					<h3></h3>
        					<p></p>
      					</div>   
    			</div>
    			<div class="carousel-item">
      				<img src="images/JavaScript.jpg" alt="JavaScript" width="1100" height="500">
      					<div class="carousel-caption">
        					<h3></h3>
        					<p></p>
      					</div>   
    			</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
    			<span class="carousel-control-prev-icon"></span>
  			</a>
  			<a class="carousel-control-next" href="#demo" data-slide="next">
    			<span class="carousel-control-next-icon"></span>
  			</a>
		</div>
		
		<section class="my-5">
			<div class="py-5">
				<h3 class="text-center"> Faculty Learning Portal </h3>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<img src="images/VelTech.jpg" class="img-fluid" aboutimg>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<h3 class="display-4"> Introduction </h3>
						<p class="py-2"> Faculty Development programs strengthen the professional development of the faculty members and administrators who deal directly with students. Our goal is to help these educators increase the effectiveness of their teaching, especially in undergraduate programs, so that they are better able to guide students on journeys of inquiry and discovery. </p>
						<a href="aboutus.php" class="btn btn-success"> Read More </a>
					</div>
				</div>
			</div>
		</section>
		
		<footer>
      		<p class="p-3 bg-dark text-white text-center"> Internet Programming Project by GROUP 8.</p>
    	</footer> 
    	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>	
	</body>
</html>