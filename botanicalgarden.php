<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botanical Gardens</title>
    <link rel="stylesheet" href="CSS/dhk_places_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include 'style.php' ?>
  </head>
<body>
    <?php include 'navbar.php' ?>

      <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/botanicalgarden_cover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Botanical Gardens</h1>
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
                    <p>The shady, tranquil botanical gardens, stretch over 40 hectares and contain over 1000 species of local and foreign plants, as well as lots of birdlife that flock to its several lakes and ponds (particularly in winter). Some way from the centre of Dhaka, it’s a nice respite from the city’s mass of humanity. In the distance you’ll see the Turag River.</p>
                    <span id="dots"></span>
                    <span id="more">
                    <p style="color: green; font-size: 20px;">Open time: <span style="color: black; font-size: 22px;">Monday – Saturday</span>(6AM – 6PM) <span style="color: black; font-size: 22px;">Sunday</span>(24Hours).</p>
                

                    <p style="color: blue; font-size: 20px;">Ticket Price: <span style="color: black; font-size: 22px;">5 Taka</span>(Per Person).</p>
                    <p style="color: Orange; font-size: 20px;">Thana: </br>
                     <span style="color: black; font-size: 17px;">Rupnagar Police Station: +88-02-9002177</span> </br> 
                    <span style="color: black; font-size: 17px;">Pallabi Police Station: +88-02-9015922, +8801199883735</span> 
                    </p>
                  
                    <p style="color: darkblue ; font-size: 20px;">Facebook Link:
                     <span style="color: blue; font-size: 17px;"><a href="https://www.facebook.com/BotanicalGarden.Dhaka" target="_blank">www.facebook.com/botanical garden bangladesh</a></span> </br>  
                    </p>

                    <p style="color: tomato; font-size: 20px;">Video: </br>
                     <span style="color: blue; font-size: 17px;"><iframe width="560" height="315" src="https://www.youtube.com/embed/ff-W_Jq1tmM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span> </br>  
                    </p>

                    </span>
                    <div class="READMORE">
                        <a id="readMore">See More...</a>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <div class="dropdown-divider"></div>
    <section class="container title">
        <div class="tt">
            <h3>Gallery</h3>
        </div>

    </section>
      <section class="container">
        <div class="gallery">
            <a href="image/Dhaka/Botanical/pic-1.jpg" data-lightbox="mygallery"><img src="image/Dhaka/Botanical/pic1.jpg"></a>
            <a href="image/Dhaka/Botanical/pic-2.jpg" data-lightbox="mygallery"><img src="image/Dhaka/Botanical/pic2.jpg"></a>
            <a href="image/Dhaka/Botanical/pic-3.jpg" data-lightbox="mygallery"><img src="image/Dhaka/Botanical/pic3.jpg"></a>
            <a href="image/Dhaka/Botanical/pic-4.jpg" data-lightbox="mygallery"><img src="image/Dhaka/Botanical/pic4.jpg"></a> 
            <a href="image/Dhaka/Botanical/pic-5.jpg" data-lightbox="mygallery"><img src="image/Dhaka/Botanical/pic5.jpg"></a>
            <a href="image/Dhaka/Botanical/pic-6.jpg" data-lightbox="mygallery"><img src="image/Dhaka/Botanical/pic6.jpg"></a>
            <a href="image/Dhaka/Botanical/pic-7.jpg" data-lightbox="mygallery"><img src="image/Dhaka/Botanical/pic7.jpg"></a>
            <a href="image/Dhaka/Botanical/pic-8.gif" data-lightbox="mygallery"><img src="image/Dhaka/Botanical/pic8.gif"></a>
            
        </div>
      </section>
    <section class="container title">
        <div class="tt">
            <h3>Location & Map</h3>
        </div>
    </section>
    <section class="container map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1609433538797!2d90.34551961744383!3d23.81287530000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c11b9b0adbd9%3A0x6f5e38cb8c69d719!2sNational%20Botanical%20Garden!5e0!3m2!1sen!2sbd!4v1605149582846!5m2!1sen!2sbd" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
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