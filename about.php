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
<section>
    <div class="w-50 m-auto">
      <form action="primary.php" method="post">
        <div class="form-group">
          <label>username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class
          ="form-control">
        </div>
        <div class="form-group">
          <label>comment</label>
          <textarea class="form-control">
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
      </form>
    </div>
  </section>
<footer>
  <p class="p-3" style="background-color: #d9b3ff;text-align: center;">Hemantha k email:hemannthkrish99@gmail.com :)</p>
 </footer>
</body>
</html>