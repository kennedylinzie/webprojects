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
      <link rel="stylesheet" href="assets/css/mymocap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">


      <script src="assets/js2/jquery-1.11.3.min.js"></script>
      <script src="assets/js2/bootstrap.min.js"></script>
      <!-- Load font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light style="background-color: #ffff;" clean-navbar">
    <a class="navbar-brand mb-0 h1"  href="#"><img src="assets/img/logo.png" width="30" height="30" alt="">Driverless</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" class="active" href="#" id="home">Home <span class="sr-only" >(current)</span></a>
        </li>
                <li class="nav-item">
                  <a class="nav-link" class="scroll" href="#news1" id="news">News </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact-us.php" id="contact">Contact Us</a>
                </li>

        <li class="nav-item">
          <a class="nav-link" class="scroll" href="#aboutus"id="about">About Us</a>
        </li>





        <li class="nav-item dropdown" id="account">
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
                    <?php echo " ".$username;?>
                </div>



                  <p style="padding-left:40px;">  <kbd style="padding-left:20px;padding-bottom:-20px;padding-right:20px;" id="mrtime"></kbd> left to the big event</p>

                  <div class="card-success"  style="width: 18rem;padding-left:12px; background-color:red;"  id="winner" >
                    <div class="card-header">
                        <?php echo " ".$username." you are the Winner !!";?>
                    </div>

                  </div>




      </ul>

    </div>
  </nav>

















  <script>
    $(document).ready(function(){
     $('#winner').hide();
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




            <main class="page landing-page">




              <div class="carousel slide" data-ride="carousel" id="carousel-1" data-interval="3000" class="row justify-content-center"
                 >
                  <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active" >
                        <div class="container">
                        						<div class="carousel-caption">
                        							<h3> mercedes Bens</h3>

                        						</div>
                        					</div>

                        <img class="w-100 d-block" src="assets/img/slider/img1.jpg" alt="Slide Image" style="border-radius: 0px 0px 50px 50px;" /></div>
                      <div class="carousel-item">

                        <div class="container">
                                    <div class="carousel-caption">
                                      <h3>Pony ai techlogy</h3>

                                    </div>
                                  </div>
                        <img class="w-100 d-block" src="assets/img/slider/img2.jpg" alt="Slide Image" style="border-radius: 0px 0px 50px 50px;"></div>
                      <div class="carousel-item">
                        <div class="container">
                                    <div class="carousel-caption">
                                      <h3>Argo ai</h3>

                                    </div>
                                  </div>
                        <img class="w-100 d-block" src="assets/img/slider/img3.jpg"  alt="Slide Image" style="border-radius: 0px 0px 50px 50px;"></div>
                      <div class="carousel-item">
                        <div class="container">
                                    <div class="carousel-caption">
                                      <h3>Waymo taxi vehicle</h3>
                                    </div>
                                  </div>
                        <img class="w-100 d-block" src="assets/img/slider/img4.jpg"  alt="Slide Image" style="border-radius: 0px 0px 50px 50px;"></div>
                      <div class="carousel-item">

                        <div class="container">
                                    <div class="carousel-caption">
                                      <h3>meacedes benz</h3>
                                    </div>
                                  </div>
                        <img class="w-100 d-block" src="assets/img/slider/img5.jpg"  alt="Slide Image" style="border-radius: 0px 0px 50px 50px;"></div>
                        <div class="carousel-item">
                          <div class="container">
                                      <div class="carousel-caption">
                                        <h3>pony ai testing vehicle</h3>
                                      </div>
                                    </div>
                          <img class="w-100 d-block" src="assets/img/slider/img6.jpeg" alt="Slide Image" style="border-radius: 0px 0px 50px 50px;"></div>
                          <div class="carousel-item">
                            <div class="container">
                                        <div class="carousel-caption">
                                          <h3>mercedes truck</h3>
                                        </div>
                                      </div>
                            <img class="w-100 d-block" src="assets/img/slider/img7.jpg"  alt="Slide Image" style="border-radius: 0px 0px 50px 50px;"></div>
                            <div class="carousel-item">
                              <div class="container">
                                          <div class="carousel-caption">
                                            <h3>pony ai testing</h3>
                                          </div></div>
                    <img class="w-100 d-block" src="assets/img/slider/img8.jpg"  alt="Slide Image" style="border-radius: 0px 0px 50px 50px;"></div>  </div>
                  <div>
                  <ol class="carousel-indicators">
                      <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-1" data-slide-to="1"></li>
                      <li data-target="#carousel-1" data-slide-to="2"></li>
                      <li data-target="#carousel-1" data-slide-to="3"></li>
                      <li data-target="#carousel-1" data-slide-to="4"></li>
                      <li data-target="#carousel-1" data-slide-to="5"></li>
                      <li data-target="#carousel-1" data-slide-to="6"></li>
                      <li data-target="#carousel-1" data-slide-to="7"></li>
                  </ol>
              </div>
            </div>





              <div id="news1">
                  <?php require 'news.php'?>
              </div>




                            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">


                                        <div class="modal-dialog">
                                             <div class="modal-content">

                                                 <!-- header -->
                                                 <div class="modal-header">
                                                     <button type="button" class="close-primary" data-dismiss="modal">&times;</button>
                                                     <h3 class="modal-title">Subscribe to news newsletter?</h3>
                                                 </div>



                                                 <!-- button -->
                                                 <div class="modal-footer">
                                                     <button class="btn btn-primary btn-block">OK</button>

                                                 </div>

                                             </div>
                                         </div>


                                </div>
                              </div>



              <section  class="clean-block features">

                  <div class="icon-bar" >
                <a href="https://www.theguardian.com/technology/self-driving-cars"class="TheGuardian"><img src="assets/img/rss.png" width="30" height="30"/></br>TheGuardian</a>

                    <a href="https://www.reddit.com/r/SelfDrivingCars" class="reddit"><img src="assets/img/rss.png" width="30" height="30" /></br>Reddit</a>

                    <a href="#" class="newsletter" data-toggle="modal"  data-target="#modalLoginForm" class="rounded" width="30" height="110"><img src="assets/img/newsletter.png" width="30" height="30"/></br></a>



                  </div>

                  <div class="container">
                      <div class="block-heading"  >
                        <div class="auto_level">

                          <img    src="assets/img/inside_car.jpg" alt="Avatar"  class="circle_image">

                          <h2  class="text-info">Autonomy Levels</h2>
                        </div>

                          <p>Below are the levels of Autonomy these leves signify the extends of a vehicles ability to control itself.</p>

                      </div>

                                <div   class="row justify-content-center" >
                                    <div class="col-md-12 feature-box">

                                    <button  class="collapsible"  id="element0" style="border-radius: 0px 30px 30px 30px;" >Level 0 (No Driving Automation)</button>
                                    <div class="content">
                                      <p>Most vehicles on the road today are Level 0: manually controlled. The human provides the "dynamic driving task" although there may be systems in place to help the driver. An example would be the emergency braking system―since it technically doesn’t "drive" the vehicle, it does not qualify as automation.</p>
                                    </div>
                                    <button class="collapsible" id="element1" style="border-radius: 0px 30px 30px 30px;">Level 1 (Driver Assistance)</button>
                                    <div class="content">
                                      <p>This is the lowest level of automation. The vehicle features a single automated system for driver assistance, such as steering or accelerating (cruise control). Adaptive cruise control, where the vehicle can be kept at a safe distance behind the next car, qualifies as Level 1 because the human driver monitors the other aspects of driving such as steering and braking.</p>
                                    </div>
                                    <button class="collapsible" id="element2" style="border-radius: 0px 30px 30px 30px;">Level 2 (Partial Driving Automation)</button>
                                    <div class="content">
                                      <p>This means advanced driver assistance systems or ADAS. The vehicle can control both steering and accelerating/decelerating. Here the automation falls short of self-driving because a human sits in the driver’s seat and can take control of the car at any time. Tesla Autopilot and Cadillac (General Motors) Super Cruise systems both qualify as Level 2.</p>
                                    </div>

                                    <button class="collapsible" id="element3" style="border-radius: 0px 30px 30px 30px;">Level 3 (Conditional Driving Automation)</button>
                                    <div class="content">
                                      <p>The jump from Level 2 to Level 3 is substantial from a technological perspective, but subtle if not negligible from a human perspective.

              Level 3 vehicles have “environmental detection” capabilities and can make informed decisions for themselves, such as accelerating past a slow-moving vehicle. But―they still require human override. The driver must remain alert and ready to take control if the system is unable to execute the task. </p>
                                    </div>

                                    <button class="collapsible" id="element4" style="border-radius: 0px 30px 30px 30px;">Level 4 (High Driving Automation)</button>
                                    <div class="content">
                                      <p>The key difference between Level 3 and Level 4 automation is that Level 4 vehicles can intervene if things go wrong or there is a system failure. In this sense, these cars do not require human interaction in most circumstances. However, a human still has the option to manually override.

              Level 4 vehicles can operate in self-driving mode. But until legislation and infrastructure evolves, they can only do so within a limited area (usually an urban environment where top speeds reach an average of 30mph). This is known as geofencing. As such, most Level 4 vehicles in existence are geared toward ridesharing</p>
                                    </div>




                          </div>


                      </div>
                    </div>

              </section>








              <script>
              var coll = document.getElementsByClassName("collapsible");
              var i;

              for (i = 0; i < coll.length; i++) {
                  coll[i].addEventListener("click", function() {
                      this.classList.toggle("active");
                      var content = this.nextElementSibling;
                      if (content.style.display === "block") {
                          content.style.display = "none";
                      } else {
                          content.style.display = "block";
                      }
                  });
              }
              </script>
















              <div id="aboutus">
                  <?php require 'about-us.php'?>
              </div>






    </main>
  <?php require 'assets/v1/includes/layouts/footer.php'?>




</script>
<!-- //gallery -->
<!-- Smooth-Scrolling-JavaScript -->
<script type="text/javascript" src="assets/js/easing.js"></script>
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function ($) {
    $(".scroll, .navbar li a, .footer li a").click(function (event) {
      $('html,body').animate({
        scrollTop: $(this.hash).offset().top
      }, 1000);
    });
  });
</script>


<script>
// Set the date we're counting down to
var countDownDate = new Date("August 22, 2021 10:17:25").getTime();
var cutoff = 1;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("mrtime").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
$('#winner').hide();

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("mrtime").innerHTML = "EXPIRED";
          $('#winner').show();
  }
}, 1000);
</script>
