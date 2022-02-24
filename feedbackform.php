<?php
session_start();

if(!isset($_SESSION['uname'])){

   ?>
  <script>
    alert("Please login to give feedback.....")
    window.location.replace("http://localhost/werepair/");
  </script>
  <?php
}
?>
<?php
    // $conn = new mysqli('localhost', 'root', '', 'werapair');

    // if (isset($_POST['save'])) {
    //     $uID = $conn->real_escape_string($_POST['uID']);
    //     $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
    //     $ratedIndex++;

    //     if (!$uID) {
    //         $conn->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
    //         $sql = $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
    //         $uData = $sql->fetch_assoc();
    //         $uID = $uData['id'];
    //     } else
    //         $conn->query("UPDATE stars SET rateIndex='$ratedIndex' WHERE id='$uID'");

    //     exit(json_encode(array('id' => $uID)));
    // }

    // $sql = $conn->query("SELECT id FROM stars");
    // $numR = $sql->num_rows;

    // $sql = $conn->query("SELECT SUM(rateIndex) AS total FROM stars");
    // $rData = $sql->fetch_array();
    // $total = $rData['total'];

    // $avg = $total / $numR;
?>
<?php
error_reporting(0);
if (isset($_POST['submit'])) {
  $name = $_POST['fname'];
  $email = $_POST['femail'];
  $mobile = $_POST['fmobile'];
  $text = $_POST['ftext'];

  include("conn.php");

  $query = "INSERT INTO users_feedback(uname,uemail,umobile,ufeedback) VALUES('$name','$email','$mobile','$text')" ;
  $result = mysqli_query($conn,$query) or die("sql error..");
  if ($result) {
    ?>
    <script>
      alert("feedback Submitted successfully...");
      window.location.replace('usershome.php');
    </script>
    <?php
  }
}


?>
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
        <a class="nav-link" href="usershome.php">Home <span class="sr-only">(current)</span></a>
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
<!-- modal ends here -->
<div class="container mb-5">
  <div class="text-center mt-4 mb-4"><h1>Your feedback encourage us...</h1></div>
  <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center order-2">
          <div class="form-group">
    <input type="text" class="form-control"  placeholder="Enter Your Name"  name="fname" required>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email"  name="femail" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <input type="tel" class="form-control"  placeholder="Mobile eg: +91 85******58" name="fmobile"  required>
  </div>
  <div class="form-group">
              <textarea class="form-control" rows="5" name="ftext" id="comment" placeholder="feedback/suggestion/complaints.." required autocomplete="off"></textarea>
  </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center order-1">
                  <img src="images/feedback.png" alt="feedback_image" style="max-width: 500px; max-height: 600px;">
        </div>
      </div>
      </div>
      <div style="text-align: center;">
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </form>
  </div>
</div>

  </body>
</html>
<?php

  include "footer.html";

?>