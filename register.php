<!DOCTYPE html>
<html>
  <head>
    <title></title>
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

    <section class="my-5">
      <div class="py-5">
        <h3 class="text-center"> Register </h3>
      </div>
      <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
          <div class="for-group">
            <label>First Name</label>
            <input type="text" name="first" autocomplete="off" class="form-control">
          </div>
          <br>
          <div class="for-group">
            <label>Last Name</label>
            <input type="text" name="last" autocomplete="off" class="form-control">
          </div>
          <br>
          <div class="for-group">
            <label>Email Id</label>
            <input type="text" name="email" autocomplete="off" class="form-control">
          </div>
          <br>
          <div class="for-group">
            <label>Password</label>
            <input type="Password" name="password" autocomplete="off" class="form-control">
          </div>
          <br>
          <div class="for-group">
            <label>Mobile Number</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">
          </div>
          <br>
          <center>
            <button type="submit" class="btn btn-success"> Submit </button>
          </center>
        </form>
      </div>
    </section>

    <footer>
      <p class="p-3 bg-dark text-white text-center"> Internet Programming Project by GROUP 8</p>
    </footer>  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
  </body>
</html>