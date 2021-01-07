<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheikh Mahmudshah Mosque</title>
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
              <img src="image/Dhaka_Dist/Kishoreganj/shahcover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Sheikh Mahmudshah Mosque</h1>
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
                    <p>Shah Mahmud Masjid is an attractive building at Egarosindur may be dated sometime around 1680 AD. The mosque stands at the back of a slightly raised platform, which is enclosed by a low wall with a gateway consists of an oblong structure with do-chala roof. The mosque proper is a square structure, 5.79m a side in the inside, and is emphasized with octagonal towers on the four exteriors angles. All these towers shooting high above the roof and terminating in solid kiosks with cupolas, were originally crowned with kalasa finials, still intact in the southern one. The western wall accommodates inside three mihrab –the central one semi –octagonal and the side ones rectangular. The central doorway and central mihrab are larger than their flanking counterparts. The mosque has four axially projected front ones, each corresponding to the centrally located doorways and the central mihrab. The parapets and cornices are horizontal in the usual Mughal fashion.

All the mihrabs are enriched with terracotta decoration. The mihrabs are arched having cuspings in their outer faces. The pilasters, supporting the mihrab arches, show a series of decorated bands topped by a frieze of petals. The spandrels of these arches, though now plain must have been originally enriched with terracotta plaques. Above the rectangular frame of the central mihrab there is a row of arched-niches filled with varieties of small trees containing flowers. The mosque should specially be noted for its four axially projected frontons with bordering ornamental turrets, a device which must have been borrowed from the four axial iwan-type gateways of the Persian influenced north Indian Mughal standard mosques of Fathpur, Agra and Delhi.

The mosque has a very large dome at the top. Four corners of the mosque are having octagonal columns and the middle of the walls are having eight small columns (each wall two). The Shah Mahmud mosque has stylish terracotta at the eastern wall. Also it has expensive (considering that period) decoration at the top of the walls, columns and mini-minarets.</p>
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.4386295024647!2d90.66165111539611!3d24.261405484340003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375686961e2a731f%3A0xde5087b1bd1427f9!2sSheikh%20Mahmud%20Shah%20Mosque!5e0!3m2!1sen!2sbd!4v1608796422408!5m2!1sen!2sbd" width="1000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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