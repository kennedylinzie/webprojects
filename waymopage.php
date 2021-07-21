<?php session_start();?>
<?php require 'assets/v1/connect.php'?>
<?php require 'assets/v1/setup.php'?>
<?php

$email = "";
$username ="";

$email = $_SESSION['email'];
$username = $_SESSION['username'];

if(isset($email) && isset($username))
{

//echo "welcome ".$username."whose email is ".$email;

}else {
  header("Location:login.php");
}

//echo $email."..".$username;
?>

<script>

echo "";  $(document).ready(function(){

    $('#btn_name').show();
    $('#account').show();

});

</script>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Driverless</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
      <link rel="stylesheet" href="assets/css/mymocap.css">
</head>

<body>

  <script>
    $(document).ready(function(){

      $('#btn_name').show();
        $('#account').show();

        $("#home").slideUp();
      $("#news").slideUp();
      $("#news").slideUp();
      $("#about").slideUp();
      $("#account").slideUp();
        $("#contact").slideUp();
          $("#btnn").slideUp();

        $("#home").slideDown(100);
      $("#news").slideDown(100);
      $("#contact").slideDown(100);
      $("#about").slideDown(100);
      $("#account").slideDown(100);
        $("#contact").slideDown(100);
            $("#btnn").slideDown(100);

  });

  </script>
  <nav class="navbar navbar-expand-lg navbar-light style="background-color: #ffff;" clean-navbar">
    <a class="navbar-brand mb-0 h1"  href="#"> <img src="assets/img/logo.png" width="30" height="30" alt="">Driverless</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" class="active" href="index.php" id="home" >Home <span class="sr-only">(current)</span></a>
        </li>

                <li class="nav-item">
                  <a class="nav-link" href="index.php#news" id="news">News & Insights </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact-us.php" id="contact">Contact Us</a>
                </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php#aboutus" id="about">About Us</a>
        </li>





        <li class="nav-item dropdown" id="account" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="login.php">Login</a>
            <a class="dropdown-item" href="assets/v1/logout.php">Log out</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="manageAccount.php">Manage Account</a>
          </div>
        </li>



        <div class="chip">
           <img src="assets/img/avatars/prof.png" alt="Person" width="96" height="96">
           <?php echo "".$username;?>
       </div>


      </ul>

    </div>
  </nav>






  <section class="clean-block clean-info dark">
      <div class="container">
          <div class="block-heading">
              <h2 class="text-info">WAYMO</h2>
              <p>Waymo is not a car company it is a technology company it creates technology that other companies buy and intergrate in their vehicles for an autonomous experience.</p>
          </div>
          <div class="row align-items-center">
              <div class="col-md-6"><img class="img-thumbnail"  src="assets/img/waymologo.png"></div>
              <div class="col-md-6">
                  <h3>way more origins</h3>
                  <div class="getting-started-info">
                      <p>Waymo has driven autonomously more than 16 million kilometers on public roads and the technology has done more than 16 billion kilometers of simulator driving in 26 different cities in the USA..</p>
                      <p>In 2009 google a group of engineers to start a self-driving project, they were told the system has to finish 10 different 100-kilometer routes without human intervention...</p>

          </div>
      </div>
  </section>
  <section class="clean-block clean-info dark">
      <div class="container">

          <div class="row align-items-center">
              <div class="col-md-6"><section >
                  <div class="text">
                    <video class="row justify-content-center" width="400" height="400" controls>
                          <source src="assets/videos/waymo_vid.mp4" type="video/mp4">

                        </video>



                        <p  target="_blank">testing the waymo driver system this what the monitors were doing instead of watching the road.</p>.

              </section></div>
              <div class="col-md-6">
                  <h3>A little something on testing</h3>
                  <div class="getting-started-info">
                      <p>At first, they were testing system with a human driver in the car to control the car in case it goes out of the normal working environment the autonomous cars were so good the driver became complacent [some were busy with their phone and some were doing make up in the car and even the worst case they were sleeping in the car but no accident ever happened see the video on the left...</p>



          </div>
      </div>
  </section>
  <section class="clean-block clean-info dark">
      <div class="container">

          <div class="row align-items-center">

                  <h3>Ferther more</h3>
                  <div class="getting-started-info">
                      <p>Waymo was developing all the technologies inhouse and were committed the automated driverless vehicles this point this was all third-generation technology,
                      In 2015 they had completed the world’s first fully autonomous driverless drive in Texas.</p>

                          <p>In 2016 with that achievement, they became Waymo from under google to being under the parent company alphabet.</p>

          </div>
      </div>
  </section>






  <section class="clean-block about-us">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-sm-6 col-lg-4">
                  <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/videos/lidar.gif">
                      <div class="card-body info">
                          <h4 class="card-title">Lidar sensor</h4>
                          <p class="card-text">Gets the picture if the surrounding in 3D it can see at night 300 meters away and everything is this range is detected.</p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                  <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/videos/radar.gif">
                      <div class="card-body info">
                          <h4 class="card-title">Radar sensor</h4>
                          <p class="card-text">this sensor keeps tracks of everythimg either static or moving object it can be used in all weather conditions.</p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                  <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/videos/camera.gif">
                      <div class="card-body info">
                          <h4 class="card-title">cameras</h4>
                          <p class="card-text">they see around the car with a very hight resolution view and they overlap.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <?php require 'assets/v1/includes/layouts/footer.php'?>
