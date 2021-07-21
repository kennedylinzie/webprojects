<?php session_start();?>
<?php require 'assets/v1/connect.php'?>
<?php require 'assets/v1/setup.php'?>
<?php




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
    <title>Contact Us - Driverless</title>

    <script src="assets/js2/jquery-1.11.3.min.js"></script>
    <script src="assets/js2/bootstrap.min.js"></script>

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
          <a class="nav-link" href="index.php" id="home" >Home <span class="sr-only">(current)</span></a>
        </li>

                <li class="nav-item">
                  <a class="nav-link" href="index.php#news" id="news">News </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" class="active" href="contact-us.php" id="contact">Contact Us</a>
                </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php#aboutus" id="about">About Us</a>
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
           <?php echo "".$username;?>
       </div>


      </ul>

    </div>
  </nav>


    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Contact Us</h2>
                    <p>if you have anything you wish to communocate to us please do so bellow.</p>
                </div>
                <form style="border-radius: 25px;">
                    <div class="form-group"><label>Name</label><input  class="form-control" type="text" id="username"></div>
                    <div class="form-group"><label>Questions</label><textarea  class="form-control" type="text" id="question"></textarea></div>
                  <div class="form-group" ><button type="button"  data-toggle="modal" data-target="#popUpWindow" class="btn btn-primary btn-block" >Send</button></div>
                </form>
            </div>
        </section>
    </main>





    <div class="modal fade" id="popUpWindow">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- header -->
                    <div class="modal-header">
                        <button type="button" class="close-primary" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">FAQ's</h3>
                    </div>

                    <!-- body (form) -->
                    <div class="modal-body">

                            <div >
                                <h><b>What is an automated car</b></h></br>
                                  <h >It is a vehicle that has the ability to drive itself using very powerful sensors and artificial intelligence</h>
                            </div>

                            <div >
                                <h><b>What will driving be like in the future?</b></h></br>
                                  <h >Semiautonomous cars and vehicle-to-vehicle communication could profoundly change how traffic flows and even highway design. Here are three likely scenarios.</h>
                            </div>

                            <div >
                                <h><b>How does the car see the road?</b></h></br>
                                  <h >Super Cruise and other similar systems do more than just see the road. Using an array of sensors, lasers, radar, cameras, and GPS technology, they can actually analyze a car's surroundings.</h>
                            </div>

                            <div >
                                <h><b>Will they make journeys quicker?</b></h></br>
                                  <h >In part, the answer to this question depends on the answer to the one above. Driverless cars have great potential for making journey times quicker, but only if a critical mass of people are using them.</h>
                            </div>

                            <div >
                                <h><b>Will they be popular?</b></h></br>
                                  <h >The transition to a society reliant on driverless vehicles is in some ways daunting. In fact our survey for the 2016 RAC Report on Motoring, found 62% of drivers revealed the thought of driverless cars on the road scared them, and just 25% were excited by the prospect. There are of course concerns about the risks that autonomous motoring will bring, along with some scepticism about its benefits. This is because we are really at the start of the journey and much of the technology and transport infrastructure necessary to enable safe autonomous driving is yet to be in place or even developed.</h>
                            </div>

                            <div >
                                <h><b>Should they be allowed on public roads?</b></h></br>
                                  <h >It depends who you ask. In 2018 California’s department of Motor Vehicles started allowing car makers and tech firms to test autonomous vehicles on public roads. In most cases, these test vehicles are manned by a human driver who can take control if ‘a failure of the autonomous technology is detected’. But in October 2018, California’s Department of Motor Vehicles gave the all-clear for Waymo to test self-driving cars on public roads without a human in the driver’s seat.</h>
                            </div>

                            <div >
                                <h><b>How will they work?</b></h></br>
                                  <h >The best way for truly autonomous vehicles to function, and the amount of processing power and data required, is still open to debate. However, it also seems likely that self-driving cars will have to make decisions that are not just technical or logistical, but ethical as well.

What happens, for example, in situations in which some kind of accident is inevitable?

It seems intuitive to programme autonomous cars to preserve as many human lives as possible, but what if there’s a choice between preserving the life of two innocent bystanders, or three people in a car that has broken multiple traffic laws? And is it better to swerve to avoid one pregnant woman, or three elderly men all in their nineties?

A team of psychologists and computer scientists from MIT decided to crowd-source the views of real people via a website and questionnaire called ‘The Moral Machine’. The findings, which were published in the journal Nature, aren’t intended to directly influence the design of autonomous vehicles, but they do shed light on some of the complications that might arise.</h>
                            </div>

                            <div >
                                <h><b>Who will be the early adopters?</b></h></br>
                                  <h >Generally speaking, new consumer technology tends to be embraced first by young, wealthy, metropolitan people. But that assumption might not hold true for autonomous vehicles.

Voyage is a Silicon Valley startup that’s betting on the elderly being a significant early market for self-driving cars. The company is testing its autonomous vehicles (AVs) in The Villages, a retirement community of 125,000 people in Florida. According to Voyage CEO Oliver Cameron, the simple, easy-to-navigate streets of The Villages, as well as its residents’ requirements for transport solutions mean that it could be the ideal place for the technology to enjoy widespread adoption. ‘We expect it to be the first city in the world to adopt AVs as the primary means of transport,” he said.</h>
                            </div>

                            <div >
                                <h><b>Have there been any accidents involving the testing vehicles?</b></h></br>
                                  <h >Under current Pennsylvania law, a reportable accident is one that involves injury to or death of a person or where there is damage to any vehicle to the point that it cannot be driven and requires towing. Crash reporting does not currently require identification of the vehicle as an HAV, so PennDOT does not currently maintain crash records specific to HAVs. Additionally, since minor fender-benders are not defined as reportable crashes, PennDOT would not know under current law if a minor incident occurred involving an HAV.</h>
                            </div>

                            <div >
                                <h><b>Why test on public roads instead of on tracks or closed courses?</b></h></br>
                                  <h >The National Highway Traffic Safety Administration (NHTSA) is recommending that "test approaches should include a combination of simulation, test track, and on-road testing." PennDOT agrees and none of our comments in the policy or at the webinar should be taken to minimize the use or importance of simulations or test track testing.</h>
                            </div>


                    </div>

                    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    </div>

                    <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    </div>
                    <!-- button -->
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-block" id="poost">No answer here submit mine</button>
                    </div>

                </div>
            </div>
        </div>


        <script>

        $(document).ready(function(){

                $('#poost').on('click', function() {


                          var firstname = $('#username').val();
                          var question = $('#question').val();





                          if(firstname!="" && question!=""){


                            $.ajax({
                              url: "assets/v1/save_questions.php",
                              type: "POST",
                              data: {
                                type: 1,
                                firstname: firstname,
                                question: question
                              },
                              cache: false,

                              success: function(dataResult){
                                var dataResult = JSON.parse(dataResult);
                                if(dataResult.statusCode==200){
                              	$("#success").show();
                              	$('#success').html('Question posted !');


                                }
                                else if(dataResult.statusCode==201){
                                	$("#error").show();
                                	$('#error').html('Oops something went wrong !');

                                }

                              }
                            });
                          }
                          else{
                            alert('Please fill all the field !');
                          }


                });
        });

          </script>




    <?php require 'assets/v1/includes/layouts/footer.php'?>
