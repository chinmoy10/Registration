<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gangatia Manob Babur Bari</title>
    <link rel="stylesheet" href="CSS/dhk_places_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
              <img src="image/Dhaka_Dist/Kishoreganj/manobcover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Gangatia Manob Babur Bari</h1>
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
                    <p>This Zamindar Bari (জমিদার বাড়ী) is currently known as Manob Babur Bari (মানব বাবুর বাড়ী) as the current owner’s name is Manab Babu (মানব বাবু) who is the last descendent of the Gangatia Zamindar (গাংগাটিয়া জমিদার). Manob Babu (মানব বাবু) has fisheries project near from his house. You can also visit the project with its owner if he is available.

According to the Manob Babu (মানব বাবু), they are the possible smallest Zamindar (জমিদার) from the Bangladesh. Their forefathers came here from India, a Brahmin family (very strictly following Brahmin). During the war of 1971, the Pakistani armies and their Bangladeshi allies have done lot of damage to their house. Right now he is living there with his wife and sister. Neither he nor his brothers (all his brothers are passed away) have any children.

Gangatia Zamindar Bari (গাংগাটিয়া জমিদার বাড়ী) is mainly a small house that is having an array of Roman styled columns at the front. The architecture and the style of the building from the front side is amazingly beautiful. Very few travelers use to visit here. This Zamindar Bari (জমিদার বাড়ী) is a small one, but it has a massive boundary. The front door is also decorated and stylish. (গাংগাটিয়া জমিদার বাড়ী).








</p>
                    <span id="dots"></span>
                    


                </div>
            </div>
        </div>
    </section>
    <div class="dropdown-divider"></div>

    <section class="container title">
        <div class="tt">
            <h3>Location & Map</h3>
        </div>
    </section>
    <section class="container map"> <iframe
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.6551245609735!2d90.7011379153994!3d24.462747884243115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37568c44d61683b5%3A0xd4f4304ba8aa3de7!2sGangatia%20Jomidar%20Bari!5e0!3m2!1sen!2sbd!4v1608786195571!5m2!1sen!2sbd" width="1000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
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