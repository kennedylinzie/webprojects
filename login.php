
<?php session_start();?>
<?php require 'assets/v1/connect.php'?>
<?php require 'assets/v1/setup.php'?>


<?php

if (isset($_SESSION['email']) && isset($_SESSION['username']))
{
  $email = $_SESSION['email'];
  $username = $_SESSION['username'];
}else {

  $username = "";
}


?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Driverless</title>
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
var user = "<?php  echo $username;?>"

if(user == "")
{

}else {
    $("#login_form").hide();
      $("#register_form").hide();
}

    //  $('#btn_name').hide();
    //    $('#account').hide();

        $("#home").slideUp();
      $("#news").slideUp();
      $("#news").slideUp();
      $("#about").slideUp();
    ///  $("#account").slideUp();
        $("#contact").slideUp();
          $("#btnn").slideUp();

        $("#home").slideDown(100);
      $("#news").slideDown(100);
      $("#contact").slideDown(100);
      $("#about").slideDown(100);
      //$("#account").slideDown(100);
        $("#contact").slideDown(100);
            $("#btnn").slideDown(100);

  });

  </script>

  <nav class="navbar navbar-expand-lg navbar-light style="background-color: #ffff;" clean-navbar">
    <a class="navbar-brand mb-0 h1"  href="#"> <img src="assets/img/logo.png" alt="">Driverless</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php" id="home">Home <span class="sr-only"></a>
        </li>

                <li class="nav-item">
                  <a class="nav-link" href="index.php#news" id="news">News </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact-us.php" id="contact">Contact Us</a>
                </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php#aboutus" id="about">About Us</a>
        </li>


        <li class="nav-item active dropdown" class="active" id="account" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item"  href="login.php">Login</a>
            <a class="dropdown-item" href="assets/v1/logout.php">Log out</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="manageAccount.php">Manage Account</a>
          </div>
        </li>



        <script>

        $(document).ready(function(){

            $('#btn_name').hide();
            $('#account').hide();

        });

        </script>

        <button class="btn btn-success my-2 my-sm-0" id="btn_name" ><?php
        if(isset($email) && isset($username))
        {
            if($username != "root")
            {

              echo "welcome : ".$username;

            }


        }else {

        }
       ?></button>

      </ul>

    </div>
  </nav>





<!--llllllllllllll-->

 <main class="page registration-page">
          <section class="clean-block clean-form dark">
              <div class="container">
                  <div class="block-heading">
                      <h2 class="text-info">login or register</h2>
                      <p>Login into your driverless account or register to be able to see more great content.</p>
                  </div>

                  <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  </div>

                  <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  </div>

                  <form id="register_form" name="form1" method="post" style="border-radius: 25px;" >
                      <div class="form-group"><label for="name">Name</label><input class="form-control item" type="text" autocomplete="on" id="firstname"></div>
                      <div class="form-group"><label for="sirname">Sirname</label><input class="form-control item" type="text"autocomplete="on" id="sirname"></div>
                      <div class="form-group"><label for="username">Username</label><input class="form-control item" type="text"autocomplete="on" id="username"></div>
                      <div class="form-group"><label for="password">Password</label><input class="form-control item" type="password"autocomplete="on" id="password"></div>
                      <div class="form-group"><label for="dob">Date of birth</label><input class="form-control item" type="date"autocomplete="on" id="dob"></div>
                      <div class="form-group"><label for="adress">Address</label><input class="form-control item" type="text"autocomplete="on" id="address"></div>
                      <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email"autocomplete="on" id="email"></div>
                      <button class="btn btn-primary btn-block" type="button" value="Register" id="butsave" >Sign Up</button>

                    <div class="row justify-content-center">
                       <button type="button" class="btn btn-muted btn-sm" id="login">already register? click Here</button>
                     </div>

                    </form>





                  <form id="login_form" name="form1" method="post" style="border-radius: 25px;">

                      <div class="form-group">
                        <label for="email">Username</label><input class="form-control item" type="email" id="username_log" autocomplete="on">
                      </div>

                      <div class="form-group">
                        <label for="password">Password</label><input  class="form-control" type="password" name="password" id="password_log" autocomplete="on">
                      </div>



                      <button class="btn btn-primary btn-block" name="save" value="Login" id="butlogin" type="button">Log In</button>
                     <div class="row justify-content-center">
                      <button type="button"  class="btn btn-muted btn-sm" id="register">Not registered yet? click here</button>
                    </div>
                      </form><br>

              </div>
          </section>

      </main>




<script>

var attempts = 3;



		$("#register_form").hide();


    	$("#error").hide();
      	$("#success").hide();

        $(document).ready(function() {
        	$('#login').on('click', function() {
        		$("#login_form").show();
        		$("#register_form").hide();
        	});
        	$('#register').on('click', function() {
        		$("#register_form").show();
        		$("#login_form").hide();
        	});
        	$('#butsave').on('click', function() {
        	//	$("#butsave").attr("disabled", "disabled");

        		var firstname = $('#firstname').val();
        		var sirname = $('#sirname').val();
        		var username = $('#username').val();
        		var password = $('#password').val();
        		var email = $('#email').val();
            var dob = $('#dob').val();
            var address = $('#address').val();


        		if(firstname!="" && sirname!="" && username!="" && password!=""&& email!=""&& dob!=""&& address!="" ){


        			$.ajax({
        				url: "assets/v1/register.php",
        				type: "POST",
        				data: {
        					type: 1,
        					firstname: firstname,
        					sirname: sirname,
        					username: username,
        					password: password,
        					email: email,
                  dob: dob,
                  address: address
        				},
        				cache: false,

        				success: function(dataResult){
        					var dataResult = JSON.parse(dataResult);
        					if(dataResult.statusCode==200){
        					//	$("#butsave").removeAttr("enabled");
        						$('#register_form').find('input:text').val('');
        						$("#success").show();
        						$('#success').html('Registration successful !');

                    $("#login_form").show();
                		$("#register_form").hide();
        					}
        					else if(dataResult.statusCode==201){
        						$("#error").show();
        						$('#error').html('Email and username already exists !');
        					}

        				}
        			});
        		}
        		else{
        			alert('Please fill all the field !');
        		}
        	});


	$('#butlogin').on('click', function() {

    $("#error").hide();
      $("#success").hide();


		var username = $('#username_log').val();
		var password = $('#password_log').val();


		if(username!="" && password!="" ){


        login(username,password);
        attempts--;

		}
		else{

      $("#error").show();
      $('#error').html('Please fill all the field !');

		}
	});
});


function login(username,password)
{


        $.ajax({
          url: "assets/v1/register.php",
          type: "POST",
          data: {
            type:2,
            username: username,
            password: password
          },
          cache: false,
          success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){
              location.href = "assets/v1/getusername.php";
            }
            else if(dataResult.statusCode==201){
              $("#error").show();
              $('#error').html('Invalid EmailId or Password ! '+ attempts + ' attempts left');
            }else if (dataResult.statusCode==202) {
              $("#error").show();
              $('#error').html('This account is blocked try later ! '+ 0 + ' attempts left');
            }
            else if (dataResult.statusCode==203) {
              $("#error").show();
              $('#error').html('This user doesnt exist');
            }

          }
        });


}



function time_and_lock_status(username)
{


  $.ajax({
    url: "assets/v1/register.php",
    type: "POST",
    data: {
      type:3,
      username: username

    },
    cache: false,
    success: function(dataResult){
      var dataResult = JSON.parse(dataResult);
      if(dataResult.statusCode==200){
          alert("data set");

      }
      else if(dataResult.statusCode==201){
          alert("data not set");

      }

    }
  });


}


function checktime(){
  //get tried time
  var tim;
            $.get("assets/v1/fetch_time.php",function(data,status){

                tim = data;

            });
  return tim
}

function check_stat(){
  //get locked status
  var stat;
            $.get("assets/v1/fetch_lock_stat.php",function(data1,status){

                stat = data1;


            });
  return stat;
}



</script>




  <?php require 'assets/v1/includes/layouts/footer.php'?>
