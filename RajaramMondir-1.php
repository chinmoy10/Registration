<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajaram Mondir</title>
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
              <img src="image/Dhaka_Dist/Maradipur/rajaramcover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Rajaram Mondir</h1>
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
                    <p>The great “Rajaram Mandir” which is located at the Khalia village from Tekerhat, Madaripur. If you are from Dhaka, then Tekerhat will be before the Madaripur town. Or if you are Madaripur, then it will be beside the Dhaka highway. Tekerhat is a landmark from Madaripur, actually this is under the Rajoir Upazila. Also for your information, the temple is near the “Peace Center” of Khalia. If you find it’s hard to locate the temple, then just ask people nearby about the Old Temple around. They can show you the path.

This is a two stored temple, and Bangladesh government taken control of this and promulgate this as the Archaeological heritage of the country. It’s not known when the temple was built. From the name, its easily guess that, it was built by someone rich person Rajaram. This lovely temple has noticeable number of terracotta on the wall and the pillar. The experts used to say the images from the temple actually depict some portion of the Mahabharat and Ramayan. If you are an archaeological heritage lover, then it’s a must visit place for you.</p>
                    
        </div>
    </section>
    <div class="dropdown-divider"></div>

    <section class="container title">
        <div class="tt">
            <h3>Location & Map</h3>
        </div>
    </section>
    <section class="container map"> <iframe
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.546686105912!2d90.00221611537972!3d23.223185384851906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37557de494252d85%3A0xbc1f4eba6b7836a8!2skhalia%20raja%20ram%20Temple!5e0!3m2!1sen!2sbd!4v1608838508096!5m2!1sen!2sbd" width="1000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>

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
