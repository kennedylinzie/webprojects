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
        <li class="nav-item ">
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
              <h2 class="text-info">Argo ai</h2>
              <p>Argo AI is an autonomous driving technology company headquartered in Pittsburgh, Pennsylvania The company was co-founded in 2016 by Bryan Salesky and Peter Rander, veterans of the Google and Uber automated driving programs Argo AI is an independent company that builds the software, hardware, maps, and cloud-support infrastructure to power self-driving vehicles. Argo has two major investors: Ford Motor Co. (2017 and the Volkswagen Group (2020).</p>
          </div>
          <div class="row align-items-center">

              <div class="col-md-6">


          </div>
      </div>
  </section>
  <section class="clean-block clean-info dark">
      <div class="container">

          <div class="row align-items-center">
              <div class="col-md-6"><section >
                  <div class="text">
                    <video class="row justify-content-center" width="400" height="400" controls>
                          <source src="assets/videos/argocomp.mp4" type="video/mp4">

                        </video>



                        <p  target="_blank">.</p>.

              </section></div>
              <div class="col-md-6">
                  <h3>A little history on argo ai</h3>
                  <div class="getting-started-info">
                    <p>Argo AI was co-founded in November 2016 by roboticists Bryan Salesky and Peter Rander. As of July 2020, the company employed over 1000 employees with offices in Pittsburgh, Detroit, Palo Alto, Cranbury, NJ  and Munich, Germany In June 2020, Argo was valued at $7.25 billion.

                      Argo claims its technology will deliver Level 4-capable Self-Driving Systems (SDS) for autonomous driving (AV) vehicles Autonomous driving categories are defined by the Society of Automotive Engineers and have been adopted as industry standards by the U.S. Department of Transportation

The technology developed by Argo comprises the entire self-driving system, including the software and hardware compute platforms, sensors, cameras, radar, and light detection and ranging radar...</p>



          </div>
      </div>
  </section>
  <section class="clean-block clean-info dark">
      <div class="container">

          <div class="row align-items-center">

                  <h3>on sensor</h3>
                  <div class="getting-started-info">
                      <p>automous car use almost the same sensor technilogy to see the world around them below is visualisation of the sensor that surround the car and are sensing the world around them at all all times.</p>



          </div>
      </div>
  </section>






  <section class="clean-block about-us">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6 col-lg-4">
                  <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/argo.gif">
                      <div class="card-body info">
                          <h4 class="card-title">Sensors</h4>
                          <p class="card-text">lidar,radar and camera sensor.</p>
                      </div>
                  </div>
              </div>


          </div>
      </div>
  </section>


  <?php require 'assets/v1/includes/layouts/footer.php'?>
