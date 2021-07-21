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
      <link rel="stylesheet" href="assets/css/mycss.css">
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light style="background-color: #ffff;" clean-navbar">
    <a class="navbar-brand mb-0 h1"  href="#"> <img src="assets/img/logo.png" width="30" height="30" alt="">Driverless</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" class="active" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

                <li class="nav-item">
                  <a class="nav-link" href="news.php">News & Insights </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>

        <li class="nav-item">
          <a class="nav-link" href="about-us.php">About Us</a>
        </li>





        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="login.php">Login</a>
            <a class="dropdown-item" href="faq.php">FAQ</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="manageAccount.php">Manage Account</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="assets/v1/logout.php">Log out</a>
        </li>

         <button class="btn btn-success my-2 my-sm-0" ><?php echo "welcome : ".$username;?></button>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>










        <section class="clean-block about-us">
            <a href="waymopage.php">
            <div class="container">

                <div class="block-heading">
                    <h1 class="text-info">News</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/waymogif.gif">
                            <div class="card-body info">
                                <h4 class="card-title">Waymo</h4>
                                <p class="card-text">Waymo is a technology company under google parent company alpjhabet click to learn more.</p>

                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar2.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Robert Downturn</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar3.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Ally Sanders</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



                <section class="clean-block features">
                    <div class="container">
                        <div class="block-heading">
                            <h2 class="text-info">Features</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                                <h4>Bootstrap 4</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                            </div>
                            <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                                <h4>Customizable</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                            </div>
                            <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                                <h4>Responsive</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                            </div>
                            <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                                <h4>All Browser Compatibility</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                            </div>
                        </div>
                    </div>
                </section>



    </main>
  <?php require 'assets/v1/includes/layouts/footer.php'?>
