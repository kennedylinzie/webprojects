

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About Us - Driverless</title>
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







    <main class="page">
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">About Us</h2>
                    <p>Driverless is a media company that deals providing up to date information about autonomous vehicles.We give our readers the information they need to know about this emerging technology.</p>
                </div>
                <div class="row justify-content-center">

                  <div>


                    <a href="https://www.facebook.com/">  <img class="fb" src="assets/icons/facebook.png" class="img-circle" class="mysocials"  alt="facebook">
                  </a>
                      <a href="https://www.twitter.com">  <img class="tw" src="assets/icons/twitter.png" class="img-circle" class="mysocials"   alt="twitter" >
                    </a>
                        <a href="https://www.youtube.com">  <img class="yo" src="assets/icons/youtube.png" class="img-circle" class="mysocials"  alt="youtube" >
                      </a>
                        <a href="https://www.linkedin.com">  <img class="li" src="assets/icons/linkedin.png" class="img-circle" class="mysocials"  alt="linkin">
                          </a>
                  </div>

                    </div>
                </div>
            </div>
            <h3>location of our central office</h3>
                <!--The div element for the map -->
                <div id="map"></div>


        </section>


    </main>



    <script>


$(document).ready(function(){

  $(".fb").animate({

    height: '70px',
    width: '70px'
});

$(".tw").animate({

  height: '70px',
  width: '70px'
});

$(".yo").animate({

  height: '70px',
  width: '70px'
});

$(".li").animate({

  height: '70px',
  width: '70px'
});


});



    $(".fb").mouseover(function(){

            $(".fb").animate({

              height: '90px',
              width: '90px'
          });
    });

    $(".fb").mouseleave(function(){

            $(".fb").animate({

              height: '70px',
              width: '70px'
          });
    });
///////////////////////////
    $(".tw").mouseover(function(){

            $(".tw").animate({

              height: '90px',
              width: '90px'
          });
    });

    $(".tw").mouseleave(function(){

            $(".tw").animate({

              height: '70px',
              width: '70px'
          });
    });
/////////////////////////////////
    $(".yo").mouseover(function(){

            $(".yo").animate({

              height: '90px',
              width: '90px'
          });
    });

    $(".yo").mouseleave(function(){

            $(".yo").animate({

              height: '70px',
              width: '70px'
          });
    });
//////////////////////////
    $(".li").mouseover(function(){

            $(".li").animate({

              height: '90px',
              width: '90px'
          });
    });

    $(".li").mouseleave(function(){

            $(".li").animate({

              height: '70px',
              width: '70px'
          });
    });

    </script>


    <script
    
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkXf0bwcpq0sION8NAFMPLeKk-2OIw91E&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }
    </style>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const lilongwe = { lat: -13.9626, lng: 33.7741 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: lilongwe,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: lilongwe,
          map: map,
        });
      }
    </script>
