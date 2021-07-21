



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

    <script src="assets/js2/jquery-1.11.3.min.js"></script>
    <script src="assets/js2/bootstrap.min.js"></script>
</head>

<body>



        <section class="clean-block about-us">

            <div class="container">

                <div class="block-heading">
                    <h1 class="text-info">News</h1>
                    <p>Read Below more about the current leadng autonomous vehicles,technology and companies.</p>
                    <!-- weather widget start --><a target="_blank" href="https://www.booked.net/weather/lilongwe-12189"><img
                    src="https://w.bookcdn.com/weather/picture/26_12189_1_1_95a5a6_250_7f8c8d_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=w209&anc_id=52628"
                    alt="booked.net"/></a><!-- weather widget end -->
                </div>

                <div class="row justify-content-center">

                    <div class="tech" class="col-sm-6 col-lg-4" >
                        <a  href="waymopage.php" style="text-decoration:none; text-color: black;" >
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/waymogif.gif">
                            <div class="card-body">
                                <h4 class="card-title">Waymo</h4>
                                <p class="card-text" class="mylinks">Waymo is a technology company under google parent company alpjhabet click to learn more.</p>

                            </div>
                        </div>
                          </a>
                    </div>


                    <div class="tech1"   class="col-sm-6 col-lg-4">
                      <a  href="argopage.php" style="text-decoration:none; text-color: black;" >
                      <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/argo.gif">
                            <div class="card-body info">
                                <h4 class="card-title">Argo ai</h4>
                                <p class="card-text">Argo ai is a technologycompany they make technology that goes into autonomouscars.</p>

                            </div>
                        </div>
                    </div>

                    <div class="tech2"  class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/labs.gif">
                            <div class="card-body info">
                                <h4 class="card-title">Nvidia</h4>
                                <p class="card-text">A technology company mostly known for their gaming technology now create chipsets and other technologies for autonomous cars.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>






    </main>

<script>

$(document).ready(function(){



          $(".tech").animate({

            height: '290px',
            width: '290px'
        });
        $(".tech1").animate({

          height: '290px',
          width: '290px'
      });

      $(".tech2").animate({

        height: '290px',
        width: '290px'
    });
});

    $(".tech").mouseover(function(){

            $(".tech").animate({

              height: '290px',
              width: '290px'
          });
    });

    $(".tech").mouseleave(function(){

            $(".tech").animate({

              height: '300px',
              width: '300px'
          });
    });
    /////////////////////
    $(".tech1").mouseover(function(){

            $(".tech1").animate({

              height: '290px',
              width: '290px'
          });
    });

    $(".tech1").mouseleave(function(){

            $(".tech1").animate({

              height: '300px',
              width: '300px'
          });
    });
    ///////////////////
    $(".tech2").mouseover(function(){

            $(".tech2").animate({

              height: '290px',
              width: '290px'
          });
    });

    $(".tech2").mouseleave(function(){

            $(".tech2").animate({

              height: '300px',
              width: '300px'
          });
    });
</script>
