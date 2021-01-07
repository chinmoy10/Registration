<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalikhola Zamindar Bari</title>
    <link rel="stylesheet" href="CSS/dhk_places_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include 'navbar-1.php' ?>

      <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/Dhaka_Dist/Maradipur/kalikholacover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Kalikhola Zamindar Bari</h1>
                <!--<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>-->
              </div>
            </div>
            <!--<div class="carousel-item">
              <img src="image/Dhaka/NATIONAL MUSEUM.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/Dhaka/Gopalganjcover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>-->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
      <section class="container info">
        <div class="txt">
            <h4>Overview</h4>
            <div>
                <div class="container info-content">
                    <p>This is locally named as “Shaha Bari”, built by someone rich merchant. The owner of the house left the house during the war 1971 with Pakistan. Before leaving the country, he somehow able to sell his properties.

After a few minutes of walking distance from the “Shaha Bari”, there is another old house, and this one is much larger. Actually this is the mansion of the local Zamindar of here. This house is currently occupied by the local “Land Survey” section of Madaripur. 4/5 government employees used to work here. Also the old house is using by the families of these employees. From my observation, this building is not that much older compare to other Palaces from Bangladesh. But still this place is worth to visit.

Initially the people from there was apathetic to help me, and was curious about my presence here. But after a short talking with them, they started to provide information about this house. And one of the employee guided me to visit the whole Mansion.</p>
                    
        </div>
    </section>
    <div class="dropdown-divider"></div>

    

    <section>
        <!--District-->
        <div class="container district">
            
        </div>
    </section>
    
    <section>
        <div class="footer">
            <div class="container inner-footer">
                <div class="container footer-items">
                    <h2>Follow GhurboBD</h2>
                    <div class="footer-bottom">
                        Copuright &copy; Computer 2020. All right reserved.
                    </div>
                </div>
            </div>
       </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
          $('#readMore').click(function () {
              if ($(this).html() == 'See More...') {
                  $('#dots').hide();
                  $('#more').show();
                  $(this).html('See Less');
              } else {
                  $('#dots').show();
                  $('#more').hide();
                  $(this).html('See More...');
              }
          });
      });
  </script>
  
</body>
</html>
