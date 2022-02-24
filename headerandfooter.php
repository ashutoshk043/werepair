<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- fontawsome link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- link 2 -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- external css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">

<title>werepair</title>
  </head>
  <body>
    	<!-- upper nav starts here -->
      <div class="container-fluid upper_nav">
        <div class="row">
          <div class="col col-sm-12 col-md-12 col-lg-6 col-xl-6 text-right">
            <div class="row">
            <div class="col-2 col-sm-2 col-md-2 text-right ml-2">
            <a href="" class="social_icon"> <i class="fab fa-facebook fa-2x"></i></a>
            </div>
            <div class="col-2 col-sm-2 col-md-2 text-right ml-2">
            <a href="" class="social_icon" id="instagram"> <i class="fab fa-instagram fa-2x"></i></a>
          </div>
            <div class="col-2 col-sm-2 col-md-2 text-right ml-2">
            <a href="" class="social_icon"> <i class="fab fa-twitter fa-2x"></i></a>
            </div>
          </div>
          </div>
          
          <div class="col col-sm-12 col-md-12 col-lg-3 col-xl-3 text-center mobile">  
                    <a href="tel:+918887592130"><i class="fas fa-mobile-alt fa-2x"></i>&nbsp <span id="number">+918887592130</span></a>
          </div>
        </div>
      </div>
      <!-- upper nav ends here -->
      <!-- lower nav starts here -->
      <div class="container-fluid lower_nav">
      <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand pl-3" href="#">WEREPAIR.COM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-list" aria-hidden="true"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <div class="dropdown show mt-1">
  <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #000; color: white; font-size: 19px; text-transform: uppercase; font-weight: 600; margin-right: 10px;">
    services</a>

  <div class="dropdown-menu" style="background-color: #000; color:#fff; " aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" style="background-color: #000; color:#fff; " href="splitac.php" >Split AC</a>
    <a class="dropdown-item" style="background-color: #000; color:#fff; " href="ductableac.php">Ductable AC</a>
    <a class="dropdown-item" style="background-color: #000; color:#fff; " href="windowac.php">Window AC</a>
    <a class="dropdown-item" style="background-color: #000; color:#fff; " href="centralac.php">Central AC</a>
    <a class="dropdown-item" style="background-color: #000; color:#fff; " href="watercooler.php">Water Cooler</a>
    <a class="dropdown-item" style="background-color: #000; color:#fff; " href="dereezer.php">Defreezer</a>
  </div>
</div>
      <li class="nav-item">
        <a class="nav-link" href="feedbackform.php">Feedback</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <div>
        <div class="dropdown show">
  <a class="btn btn-danger dropdown-toggle mr-4" href="login/login.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Login
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: #000;">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Login</button>

    <a href="login/logout.php" class="btn btn-danger">Logout</a>

  </div>

    </div>
    </div>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Services" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
    </ul>

  </div>
</nav>
</div>
<!-- lower nav ends here -->
<!-- lower nav ends here -->
  </body>
</html>
<?php

	include "footer.html";
?>