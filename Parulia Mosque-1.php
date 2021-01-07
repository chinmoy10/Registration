<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parulia Mosque</title>
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
              <img src="image/Dhaka_Dist/Narsingdi/puruliacover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Parulia Mosque</h1>
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
                    <p>Parulia Mosque,According to a Persy inscription attached in the main gateway of the mosque; Bibi Jainab, a daughter of Nasir shah and wife of Diwan Sharif, built this mosque in 1126 AH/ 1714 AD. Internally,it is 18.29m in long, 5.18m wide and the wall of the mosque is 1.52m thick. Two lateral arches divided the interior of the mosque into three square sections. Three domes cover the roof of these three sections. The domes are crowned with lotus and kalasa finials. There are banded octagonal corner towers at four corners of the mosque. It was an exception that all the corner towers reached up to the cornice. In the Mughal style corner towers generally reach above the cornice.

There are five archways in the mosque, three at the eastern wall and one each at northern and southern walls. The central archway is bigger than the other four which are all in same size and shape. The upper portion of the outer side of the main gateway is under a half-domed roof and is recessed in a rectangular structure. Three mihrabs are at the western wall corresponding to the three archways of the eastern wall. All the mihrabs and the archways are stuck in rectangular structure, which are ornamented with merlons. There are arched niches on both sides of the mihrabs and archways. Archways and mihrabs are marked by their outward projection. Rectangular and square panels decoration are in both sides of the outer face of the archways.

The mosque was partially damaged by earthquakes in 1897 and was renovated later on. There is a square shaped open courtyard in front of the mosque, which is surrounded by a wall not very high. A beautiful gateway is in the eastern side of this wall.

There are two ponds at the northern and southern side of the Mosque which has increased the beauty of Mosque. And it makes the environment of Mosque Premises cool.

There is a one domed square tomb of Diwan Sharif and Bibi Jainab on the western side of the mosque. Every year at some particular month many people of cultural diversity have come here to celebrate a fair (Local term oros). They open so many itinerant shop of snacks and different kinds of toys. People come to pray and wish to have something (Spiritual) which is related with the well being of their life.

</p>
                    
        </div>
    </section>
    <div class="dropdown-divider"></div>

    
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
