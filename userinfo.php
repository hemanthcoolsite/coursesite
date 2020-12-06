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
<section id="sec">
    <div class="w-50 m-auto">
      <form action="response.js" method="post">
        <div class="form-group">
          <label>Parant Name</label>
          <input type="text" name="parant" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile"  class="form-control">
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email"  class="form-control">
        </div>
        <div class="form-group">
          <label>Child Name</label>
          <input type="text" name="child" class="form-control">
        </div>
        <div class="form-group">
          <label>Child Age</label>
          <input type="text" name="Age" class="form-control">
        </div>
        <div class="form-group">
          <label>Course</label>
          <input type="text" name="course" class="form-control">
        </div>
        <div class="form-group">
            <label>Suitable Date for a trial class</label>
            <input name="date" type="date" id="myDate" value="yyyy-mm-dd"> 
            <script> function            
            myFunction() { var x = document.getElementById("myDate").value;
            document.getElementById("demo").innerHTML = x; } </script>
        </div>
        <div class="form-group">
            <label for="slot">Suitable Time Slot for the trial class</label>
            <select class="form-control" id="exampleFormControlSelect1" name="slot">
              <option>select</option>
              <option value="slot-1">slot-1</option>
              <option value="slot-2">slot-2</option>
              <option value="slot-3">slot-3</option>
              <option value="slot-4">slot-4</option>
              <option value="slot-5">slot-5</option>
              <option value="slot-6">slot-6</option>
              <option value="slot-7">slot-7</option>
            </select>
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
