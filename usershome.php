<?php
session_start();

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
    <!-- counter up cdn links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <!-- counter up cdn links ends -->

<title>werepair</title>
<style>
  /*footer css*/
  .wecare{
        color: #fff;
        font-size: 22px;
        font-weight: 600;
        font-family: 'Lobster', cursive;
        letter-spacing: 2px;
      }
      .wecare:hover,.textlinks:hover{
        color:yellow;
      }
      .textlinks{
        font-family: 'Lobster', cursive;
        color:#fff;
        font-size: 17px;
        font-weight: 500;
        letter-spacing: 2px;
      }
</style>
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
          <div class="col col-sm-12 col-md-12 col-lg-3 col-xl-3 text-center mobile" style="text-align: center; font-size: 20px; color:green; font-weight: 700; text-transform: capitalize;">  
                    <?php echo $_SESSION['uname']; ?>
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
  <a class="navbar-brand pl-3" href="usershome.php">WEREPAIR.COM</a>
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
      <li class="nav-item">
    <a href="login/logout.php" class="btn btn-danger mr-4">Logout</a>
      </li>
      <div>
        <!-- <div class="dropdown show">
  <a class="btn btn-danger dropdown-toggle mr-4" href="login/login.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Logout
  </a> -->

  <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: #000;"> -->
    <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Login</button> -->


  <!-- </div> -->

    <!-- </div> -->
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
      <!-- modal starts here -->
      <div>
      
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="position: relative; margin-top: 10%; border: 5px solid green; border-top-color: red; border-right-color: blue; border-left-color: yellow; border-radius: 10px;background-color: black; color:#fff;">
    <div class="modal-content" style="background-color: black; color:#fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: #fff;">&times;</span>
        </button>
        <a href="login/forgetpass.php" class="text-right" >Forget Password</a>
      </div>
      <div class="modal-body">
        <form action="login/index.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passwd" required>
  </div>
  </div>
  <div class="container text-center pb-3">
  <a href="login/register.php" class="btn btn-primary mb-1" style="max-width: 30%;">Register Here</a>
  <button type="submit" class="btn btn-success mb-1" name="login" >Login now</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 25%; margin-bottom: 2px;">Close</button>
  </div>
</form>
        
        
      </div>
      <div class="modal-footer">
         
        <div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- moda; ends here -->

    <!-- crousel starts here -->
    <section class="mt-1">
<div class="container-fluid main_images">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/main1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/main4.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/main1.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</section>
    <!-- crousel ends here -->
    <section>

      <div class="container work_going_on">
        <div class="mt-4 mb-4 heading">Recent work done :</div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="card card_css" style="width: 100%;">
  <img class="card-img-top" src="images/workgoing1.jpg" alt="Card image cap" style="max-height: 300px;">
  <div class="card-body">
    <p class="card-text" style="color:#E90B33; font-weight: 500; font-family: 'Lobster', cursive; z-index: -1; letter-spacing: 2px; font-size: 20px;">Window air conditioner is sometimes referred to as room air conditioner as well. It is the simplest form of an air conditioning system and is mounted on windows or walls. It is a single unit that is assembled in a casing where all the components are located.</p>
    <h5>Address: Vill chauda Sec 22, Noida.</h5>
    <h6>Work : Repaired window Ac </h6>
  </div>
</div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="card" style="width: 100%;">
  <img class="card-img-top" src="images/workgoing2.jpg" alt="Card image cap" style="max-height: 300px;">
  <div class="card-body">
    <p class="card-text" style="color:#E90B33; font-weight: 500; font-family: 'Lobster', cursive; z-index: -1; letter-spacing: 2px; font-size: 20px;">Window air conditioner is sometimes referred to as room air conditioner as well. It is the simplest form of an air conditioning system and is mounted on windows or walls. It is a single unit that is assembled in a casing where all the components are located.</p>
    <h5>Address: Runuwa pokherbhinda maharajganj, U.P </h5>
    <h6>Work : Repaired window Ac </h6>
  </div>
</div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container mt-4 mb-4 heading">Why you should choose us? :</div>
      <div class="container content">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 service_details order-lg-1 order-2">
            <ul>
              <li style="list-style-type: none;">Pay after service</li>
              <li style="list-style-type: none;" style="list-style-type: none;">100% Satisfaction</li>
              <li style="list-style-type: none;" style="list-style-type: none;">Moneyback Guarrenty</li>
              <li style="list-style-type: none;" style="list-style-type: none;">Works on multiplebrands</li>
            </ul>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center order-lg-2 order-1">
            <img src="images/best.png" alt="best_image">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 order-lg-3 order-3 service_details">
            <ul>
              <li style="list-style-type: none;">24 Hrs. Service</li>
              <li style="list-style-type: none;">Affordable Pricing</li>
              <li style="list-style-type: none;">Energetic and Fast servicer </li>
              <li style="list-style-type: none;">Highly Experienced & Updated Technicians</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container mt-4 mb-4 heading">Connected Companies, Buildings & Towers :</div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 text-center pt-4 pb-4">
            <img src="images/bluestar.jpeg" alt="brand_images" class="img-fluid">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 text-center pt-4 pb-4">
            <img src="images/daikin.jpeg" alt="brand_images" class="img-fluid">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 text-center pt-4 pb-4">
            <img src="images/haier.jpeg" alt="brand_images" class="img-fluid">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 text-center pt-4 pb-4">
            <img src="images/hitachi.jpeg" alt="brand_images" class="img-fluid">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 text-center pt-4 pb-4">
            <img src="images/lg.jpeg" alt="brand_images" class="img-fluid">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 text-center pt-4 pb-4">
            <img src="images/voltas.jpeg" alt="brand_images" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container mt-4 mb-4 heading">Customers feedback:</div>
      <div class="container d-flex">
        <div class="card-deck">
          <?php
  include ("conn.php");

  $query = "SELECT * FROM users_feedback order by rand() limit 4" or die("query error..");

   $result = mysqli_query($conn,$query);
   while ($row = mysqli_fetch_array($result) ) {
   
  
?>
    
 <div class="col-12 col-lg-3" style="max-height: 450px;">

    <img class="card-img-top" src="images/usericonlogo.webp" alt="Card image cap">

      <h3 class="card-title text-center" style="text-transform: capitalize;"><?php echo $row['uname']; ?></h3>
      <p class="card-text text-center"><?php echo $row['ufeedback']; ?></p>
  
</div>
   
      <?php
     }
  ?>
</div>
      </div>
    </section>
    <section>
       <div class="container mt-4 mb-4 heading">Our Experience :</div>
       <div class="container">
         <div class="row">
           <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center our_experience">
             <div><h5 style="text-align: center;font-size: 25px; font-family: 'Lobster', cursive; font-weight: 600;">We serve in :</h5><span style="font-size: 22px;color:#e65100; font-weight: 800; letter-spacing: 3px;" class="count">29</span><span style="font-size: 22px;color:#e65100; font-weight: 800; letter-spacing: 3px;">states</span></div>
           </div>
           <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center our_experience">
             <div><h5 style="text-align: center;font-size: 25px; font-family: 'Lobster', cursive; font-weight: 600;">Regular Customers :</h5><span style="font-size: 22px;color:#e65100; font-weight: 800; letter-spacing: 3px;" class="count">545854</span></div>
           </div>
           <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center our_experience">
             <div><h5 style="text-align: center;font-size: 25px; font-family: 'Lobster', cursive; font-weight: 600;">Total received feedbacks :</h5><span style="font-size: 22px;color:#e65100; font-weight: 800; letter-spacing: 3px;" class="count">521503</span></div>
           </div>
         </div>
       </div>
    </section>
    <section>
      <footer style="background-color: #000; opacity: .99; margin-top: 30px;">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
      <div class="wecare text-center mt-4">WEREPAIR.COM</div><hr style="background-color:white; height: 2px;">
      <div class="wecare_desc ml-4 mt-4 mb-3 textlinks" style="text-align: justify; margin-right: 20px;">
        Werepair is one of the trusted & independent air conditioner service providers in India. At Werepair, we offer a complete solution such as AC installation, AC repair, maintenance and AMC service for home and office air conditioners. We deal in all brands of air conditioners at a relatively low price.
      </div>

    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
      <div class="wecare text-center mt-4">Contact Us</div><hr style="background-color:white; height: 2px;">
      <div class="wecare_desc mb-3 text-center">
        <div class="textlinks"><i class="fas fa-map-marker-alt"></i>&nbspLocation:<p>Vill Runuwa post Pokherbhinda dist Maharajganj.</p></div><hr style="background-color:white; height: 2px;">
        <div class="textlinks"><i class="fas fa-mobile-alt"></i>&nbspPhone no:<p>8887592130 & 9648624342</p></div><hr style="background-color:white; height: 2px;">
        <div class="textlinks"><i class="far fa-envelope"></i>&nbspEmail:<p>ashutoshk043@gmail.com</p></div><hr style="background-color:white; height: 2px;">

      </div>

    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
      <div class="wecare text-center mt-4">Important links</div><hr style="background-color:white; height: 2px;">
      <div class="wecare_desc mb-3 mr-4">
        <ul class="text-center" style="list-style: none;">
          <a href="index.php"><li class="textlinks"> <i class="fas fa-home"></i>&nbspHome</li></a><hr style="background-color:white; height: 2px;">
          <li class="textlinks"><i class="fas fa-chevron-right"></i>&nbspServices</li><hr style="background-color:white; height: 2px;">
          <li class="textlinks"><i class="fas fa-chevron-right"></i>&nbspFeedback</li><hr style="background-color:white; height: 2px;">
          <li class="textlinks"><i class="fas fa-chevron-right"></i>&nbspAbout us</li><hr style="background-color:white; height: 2px;">
        </ul>
      </div>

    </div>
  </div><hr style="background-color:white; height: 1px;">
  <div class="text-center mt-1 textlinks">
    <h5>copyright @ 2021</h5><hr style="background-color:white; height: 1px;">
    <p>this website is designed and developed by Ashutosh Kumar.</p>
  </div>
</footer>
    </section>
    <script>
      $(".count").counterUp({
        delay:10,
        time:5000
      });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    

  </body>

</html>