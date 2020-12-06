<!doctype html>
<html>
<head>
  <title>NotchUpcourses</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #d9b3ff";>
  <a class="navbar-brand" href="index.php"> <img src="images/logo.png" width=30%,hight="auto" alt="logo">NotchUp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         All courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="userinfo.php">Python</a>
          <a class="dropdown-item" href="userinfo.php">Web Development</a>
          <a class="dropdown-item" href="userinfo.php">Game Development</a>
          <a class="dropdown-item" href="userinfo.php">Scartch Junior</a>
          <a class="dropdown-item" href="userinfo.php">App Development</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/python.jpg" alt="python" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/web.jpg" alt="web" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/mobile.jpg" alt="mobile" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section >
  	<h5 style= "text-align:center;background-color: #d9b3ff;text-color:#99ffff;padding:13px;">Book 1 Hour trial class now from bellow available courses</h5>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-lg-4 col-mg-4 col-12">
  				<div class="card">
  				<img class="card-img-top" src="images/python.jpg" alt="python" width="200" height="200">
  				<div class="card-body">
  					<h4>Python</h4>
  					<p>Book Pyhton trial class now</p>
  					<a href="userinfo.php" class="btn btn-primary">Book Now</a>
  				</div> 
  				</div></div>
  				<div class="col-lg-4 col-mg-4 col-12">
  				<div class="card">
  				<img class="card-img-top" src="images/web.jpg" alt="web" width="200" height="200">
  				<div class="card-body">
  					<h4>Web Development</h4>
  					<p>Book web development trial class now</p>
  					<a href="userinfo.php" class="btn btn-primary">Book Now</a>
  				</div> 
  				</div>
  			</div>
  				<div class="col-lg-4 col-mg-4 col-12">
  				<div class="card">
  				<img class="card-img-top" src="images/game.jpg" alt="game" width="200" height="200">
  				<div class="card-body">
  					<h4>Game development</h4>
  					<p>Book Game Development trial class now</p>
  					<a href="userinfo.php" class="btn btn-primary">Book Now</a>
  				</div> 
  				</div>
  			</div>
  				<div class="col-lg-4 col-mg-4 col-12">
  				<div class="card">
  				<img class="card-img-top" src="images/mobile.jpg" alt="mobile" width="200" height="200">
  				<div class="card-body">
  					<h4>App Development</h4>
  					<p>Book App Development trial class now</p>
  					<a href="userinfo.php" class="btn btn-primary">Book Now</a>
  				</div> 
  				</div>
  			</div>
  				<div class="col-lg-4 col-mg-4 col-12">
  				<div class="card">
  				<img class="card-img-top" src="images/Scratch.jpg" alt="app"  width="200" height="200">
  				<div class="card-body">
  					<h4>Scratch Junior</h4>
  					<p>Book Scratch Junior trial class now</p>
  					<a href="userinfo.php" class="btn btn-primary">Book Now</a>
  				</div> 
  				</div>
  			</div>
  			</div>
  		</div>
  </section>
 <footer>
 	<p class="p-3" style="background-color: #d9b3ff;text-align: center;">Hemantha k email:hemannthkrish99@gmail.com :)</p>
 </footer>
</body>
</html>
