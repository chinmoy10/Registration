<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhankora Zamindar Bari</title>
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
              <img src="image/Dhaka_Dist/Manikganj/dhankoracover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Dhankora Zamindar Bari</h1>
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
                    <p>Dhankora zamindar palace is located at Dhankora village in Saturia upazila of Manikganj district. Though the site is not far from Dhaka city, poor communication makes it difficult to reach the place. Roads leading to the village are not satisfactory, but the surrounding greenery and peaceful natural beauty of Dhankora made me forget about the hazardous travel.

According to local legend, the zamindars (landlords) came here from Delhi, India, but the exact time of their arrival is unknown. Narasingha Roy Chowdhury was the first zamindar of the dynasty. His son, Hemchandra Roy Chowdhury, built the palace in 1329 BS (1922 AD). His contribution to educational development and cultural activities of the area is notable.

The huge lion gate in front of the palace attracts a traveller’s eye at the very first glimpse. Some 100 yards inside, there are two huge two-storied water tank type structures, which created curiosity in my mind. Later, I got to know that the structures were ‘nawbatkhana’ (drum houses), from where ‘dhak’ (a kind of drum) was played during festivals. At other times, the buildings were used as guard houses.

I gradually discovered the ruinous foundation of the main building, an impressive pond and a gate house on the palace grounds. Once, there was a canal running beside the palace. Zamindars of that time were fond of travelling by river on regal boats called ‘panshi’. The nearby river is almost a dead canal now.

Dhankora zamindar palace is an important heritage of our country. Unfortunately, its condition is under threat at present. If the authorities concerned do not take necessary steps to preserve this place urgently, then our next generation may find it in ruins.

Reference: Buildings of the British Raj in Bangladesh by Nazimuddin Ahmed (UPL, 1986) and Banglar Zamindar by Sri Bamacharan Majumdar (Kolkata, 1913).</p>
                    
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
