<?php session_start();?>
<?php require 'assets/v1/connect.php'?>
<?php require 'assets/v1/setup.php'?>
<?php


if(isset($_SESSION['email']) && isset($_SESSION['username']))
{
      $email = $_SESSION['email'];
      $username = $_SESSION['username'];

      if(isset($_SESSION['email']) && isset($_SESSION['username']))
      {

      //echo "welcome ".$username."whose email is ".$email;

      }else {
        header("Location:login.php");
      }

      //echo $email."..".$username;
}else{
die();
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

      $('#btn_name').show();
          $('#account').show();

  });
</script>

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
          <a class="nav-link" href="index.php" id="home">Home <span class="sr-only">(current)</span></a>
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


        <li   class="nav-item  dropdown" class="active" id="account" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="login.php">Login</a>
            <a class="dropdown-item" href="assets/v1/logout.php">Log out</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item "  href="manageAccount.php">Manage Account</a>

          </div>
        </li>



        <div class="chip">
           <img src="assets/img/avatars/prof.png" alt="Person" width="96" height="96">
           <?php echo "".$username;?>
       </div>

      </ul>

    </div>
  </nav>





<!--llllllllllllll-->

 <main class="page registration-page">
          <section class="clean-block clean-form dark">
              <div class="container">
                  <div class="block-heading">

                      <p>View and Edit your information below.</p>
                  </div>

                  <div  class="table-responsive" >
                    <h2>View data</h2>
                  	<table class="table table-bordered table-sm"  >
                      <thead class="thead-dark" >
                        <tr>
                          <th><button type="button" id="update_username" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow">firstname</th>
                          <th><button type="button" id="update_sirname" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow_sir">sirname</th>
                          <th><button type="button" id="update_username" class="btn btn-success-disabled" ><a data-toggle="tooltip" data-placement="auto" title="EDITING EMAIL IS FORBIDDEN!">username</a></th>
                          <th><button type="button" id="update_email" class="btn btn-success"data-toggle="modal" data-target="#popUpWindow_ema">email</th>
                          <th><button type="button" id="update_dob" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow_dob">dob</th>
                          <th><button type="button" id="update_address" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow_add">address</th>
                        </tr>

                      </thead>
                      <tbody id="table">

                      </tbody>

                    </table>
                     <!--the button mthat initiates the modal popup-->
                     <script>

                            $(document).ready(function(){
                                $('[data-toggle="tooltip"]').tooltip();
                            });
                            </script>

                  </div>
                  <script>
                  	$.ajax({
                  		url: "assets/v1/view_details.php",
                  		type: "POST",
                  		cache: false,
                  		success: function(data){
                  		//	alert(data);
                  			$('#table').html(data);
                  		}
                  	});





                  </script>

              </div>
          </section>
      </main>

<!--HERE LIES OUR MODALS-->

<div class="modal fade" id="popUpWindow">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close-primary" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Update firstname</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="firstname_up" placeholder="firstname">
                        </div>
                    </form>
                </div>
                <!-- button -->
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" id="show_update_form_firstname">Submit</button>
                </div>

            </div>
        </div>
    </div>




    <div class="modal fade" id="popUpWindow_sir">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- header -->
                    <div class="modal-header">
                        <button type="button" class="close-primary" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Update sirname</h3>
                    </div>

                    <!-- body (form) -->
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="sirname_up" placeholder="sirname">
                            </div>
                        </form>
                    </div>
                    <!-- button -->
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-block" id="show_update_form_sirname">Submit</button>
                    </div>

                </div>
            </div>
        </div>




        <div class="modal fade" id="popUpWindow_use">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- header -->
                        <div class="modal-header">
                            <button type="button" class="close-primary" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Update username</h3>
                        </div>

                        <!-- body (form) -->
                        <div class="modal-body">
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username_up" placeholder="username">
                                </div>
                            </form>
                        </div>
                        <!-- button -->
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-block" id="show_update_form_username">Submit</button>
                        </div>

                    </div>
                </div>
            </div>



            <div class="modal fade" id="popUpWindow_ema">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- header -->
                            <div class="modal-header">
                                <button type="button" class="close-primary" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Update email</h3>
                            </div>

                            <!-- body (form) -->
                            <div class="modal-body">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email_up" placeholder="email">
                                    </div>
                                </form>
                            </div>
                            <!-- button -->
                            <div class="modal-footer">
                                <button class="btn btn-primary btn-block" id="show_update_form_email">Submit</button>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="modal fade" id="popUpWindow_dob">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- header -->
                                <div class="modal-header">
                                    <button type="button" class="close-primary" data-dismiss="modal">&times;</button>
                                    <h3 class="modal-title">Update Date of birth</h3>
                                </div>

                                <!-- body (form) -->
                                <div class="modal-body">
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="dob_up" placeholder="date of birth">
                                        </div>
                                    </form>
                                </div>
                                <!-- button -->
                                <div class="modal-footer">
                                    <button class="btn btn-primary btn-block" id="show_update_form_dob">Submit</button>
                                </div>

                            </div>
                        </div>
                    </div>







                    <div class="modal fade" id="popUpWindow_add">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- header -->
                                    <div class="modal-header">
                                        <button type="button" class="close-primary" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">Update address</h3>
                                    </div>

                                    <!-- body (form) -->
                                    <div class="modal-body">
                                        <form role="form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="address_up" placeholder="address">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- button -->
                                    <div class="modal-footer">
                                        <button class="btn btn-primary btn-block" id="show_update_form_address">Submit</button>
                                    </div>

                                </div>
                            </div>
                        </div>





<script>

$(document).ready(function(){
        $('#show_update_form_firstname').on('click', function() {
          var firstname = $('#firstname_up').val();
         var email = "<?php echo $email?>"

          if(firstname!="" && email!="" ){
            $.ajax({
              url: "assets/v1/updateProfile.php",
              type: "POST",
              data: {
                type: 1,
                firstname: firstname,
                email: email,
              },
              cache: false,
              success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                      updatetable();
                }
                else if(dataResult.statusCode==201){
                }
              }
            });
          }
          else{
            alert('Please fill all the field !');
          }
        });
//////////////////////////////////////

        $('#show_update_form_sirname').on('click', function() {
        //	$("#butsave").attr("disabled", "disabled");

          var sirname = $('#sirname_up').val();
          //var sirname = $('#sirname').val();
          //var username = $('#username').val();
         var email = "<?php echo $email?>"
        //  var dob = $('#dob').val();
          //var address = $('#address').val();
        //  alert(firstname+"..."+email);
        //  return;


          if(sirname!="" && email!="" ){
            $.ajax({
              url: "assets/v1/updateProfile.php",
              type: "POST",
              data: {
                type: 2,
                sirname: sirname,
                email: email,

              },
              cache: false,
              success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                //	$("#butsave").removeAttr("enabled");
                    //  alert("update successful");
                      updatetable();
                }
                else if(dataResult.statusCode==201){
                          //  alert("update successful");
                }

              }
            });
          }
          else{
            alert('Please fill all the field !');
          }
        });


/////////////////////////////////////////

        $('#show_update_form_username').on('click', function() {
        //	$("#butsave").attr("disabled", "disabled");

          var username = $('#username_up').val();
          //var sirname = $('#sirname').val();
          //var username = $('#username').val();
         var email = "<?php echo $email?>"
        //  var dob = $('#dob').val();
          //var address = $('#address').val();
        //  alert(firstname+"..."+email);
        //  return;


          if(username!="" && email!="" ){
            $.ajax({
              url: "assets/v1/updateProfile.php",
              type: "POST",
              data: {
                type: 3,
                username: username,
                email: email,

              },
              cache: false,
              success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                //	$("#butsave").removeAttr("enabled");
                      alert("update successful");
                      updatetable();
                }
                else if(dataResult.statusCode==201){
                            alert("update successful");
                }

              }
            });
          }
          else{
            alert('Please fill all the field !');
          }
        });
//////////////////////////

        $('#show_update_form_email').on('click', function() {
        //	$("#butsave").attr("disabled", "disabled");

          var email = $('#email_up').val();
          //var sirname = $('#sirname').val();
          //var username = $('#username').val();
         var username = "<?php echo $username?>"
        //  var dob = $('#dob').val();
          //var address = $('#address').val();
        //  alert(firstname+"..."+email);
        //  return;


          if(username!="" && email!="" ){
            $.ajax({
              url: "assets/v1/updateProfile.php",
              type: "POST",
              data: {
                type: 4,
                email: email,
                username: username,

              },
              cache: false,
              success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                //	$("#butsave").removeAttr("enabled");
                      //alert("update successful");
                      updatetable();
                }
                else if(dataResult.statusCode==201){
                          //  alert("update successful");
                }

              }
            });
          }
          else{
            alert('Please fill all the field !');
          }
        });
////////////////////////////////


        $('#show_update_form_dob').on('click', function() {
        //	$("#butsave").attr("disabled", "disabled");

          var dob = $('#dob_up').val();
          //var sirname = $('#sirname').val();
          //var username = $('#username').val();
         var email = "<?php echo $email?>"
        //  var dob = $('#dob').val();
          //var address = $('#address').val();
        //  alert(firstname+"..."+email);
        //  return;


          if(dob!="" && email!="" ){
            $.ajax({
              url: "assets/v1/updateProfile.php",
              type: "POST",
              data: {
                type: 5,
                dob: dob,
                email: email,

              },
              cache: false,
              success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                //	$("#butsave").removeAttr("enabled");
                    //  alert("update successful");
                      updatetable();
                }
                else if(dataResult.statusCode==201){
                          //  alert("update successful");
                }

              }
            });
          }
          else{
            alert('Please fill all the field !');
          }
        });


        $('#show_update_form_address').on('click', function() {
        //	$("#butsave").attr("disabled", "disabled");

          var address = $('#address_up').val();
          //var sirname = $('#sirname').val();
          //var username = $('#username').val();
         var email = "<?php echo $email?>"
        //  var dob = $('#dob').val();
          //var address = $('#address').val();
        //  alert(firstname+"..."+email);
        //  return;


          if(address!="" && email!="" ){
            $.ajax({
              url: "assets/v1/updateProfile.php",
              type: "POST",
              data: {
                type: 6,
                address: address,
                email: email,

              },
              cache: false,
              success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                //	$("#butsave").removeAttr("enabled");
                    ///  alert("update successful");
                      updatetable();
                }
                else if(dataResult.statusCode==201){
                          //  alert("update successful");
                }

              }
            });
          }
          else{
            alert('Please fill all the field !');
          }
        });



});

function updatetable()
{
<!-- update the table -->
  $.ajax({
    url: "assets/v1/view_details.php",
    type: "POST",
    cache: false,
    success: function(data){
    //	alert(data);
      $('#table').html(data);
    }
  });

}

</script>









      <main class="page registration-page">
               <section class="clean-block clean-form dark">
                   <div class="container">
                       <div class="block-heading">
                           <h2 class="text-info">Update Your cridentials</h2>

                           <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                           </div>

                           <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                           </div>
                       </div>
                       <form id="password_change" name="form1" method="post" style="border-radius: 25px;" >
                           <div class="form-group"><label for="oldpassword" >Old password</label><input class="form-control item" type="password" id="oldpassword"></div>
                           <div class="form-group"><label for="newpassword1" >New password</label><input class="form-control item" type="password" id="newpassword1"></div>
                           <div class="form-group"><label for="newpassword2" >New password</label><input class="form-control item" type="password" id="newpassword2"></div>
                           <button class="btn btn-primary btn-block" type="button" value="Register" id="butchange" >Sign Up</button>




                         </form>

                   </div>
               </section>

           </main>
      <script>

          $(document).ready(function(){

              $('#butchange').on('click',function(){


                $("#error").hide();
                 $("#success").hide();

                var username = "<?php echo $username?>"

                var oldpassword = $('#oldpassword').val();
                var newpassword1 = $('#newpassword1').val();
                var newpassword2 = $('#newpassword2').val();

                if(newpassword1 != newpassword2)
                {
                  $("#error").show();
                  $('#error').html('Sorry passwords dont match !!');
                }else if(newpassword1 === newpassword2) {
                      if(username!="" && oldpassword!="" && newpassword1!="" && newpassword2!=""){
                        $.ajax({
                          url: "assets/v1/changepassword.php",
                          type: "POST",
                          data: {
                            type:1,
                            username: username,
                            oldpassword: oldpassword
                          },
                          cache: false,
                          success: function(dataResult){
                            var dataResult = JSON.parse(dataResult);
                            if(dataResult.statusCode==200){
                                  $.ajax({
                                    url: "assets/v1/changepassword.php",
                                    type: "POST",
                                    data: {
                                      type: 2,
                                      newpassword1: newpassword1,
                                      username: username
                                    },
                                    cache: false,
                                    success: function(dataResult){
                                      var dataResult = JSON.parse(dataResult);
                                      if(dataResult.statusCode==200){
                                       $("#success").show();
                                       $('#success').html('update successful !');
                                      }
                                      else if(dataResult.statusCode==201){
                                      $("#error").show();
                                      $('#error').html('Something wrong try again');                                      // alert("password change NOT successful");
                                      }
                                    }
                                  });
                            }
                          }
                        });
                      }else {
                        $("#error").show();
                        $('#error').html('Invalid inputs');
                      }
                }

              });

          });

      </script>







  <?php require 'assets/v1/includes/layouts/footer.php'?>
