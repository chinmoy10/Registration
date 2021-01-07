<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betila Palace</title>
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
              <img src="image/Dhaka_Dist/Manikganj/betilacover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Betila Palace</h1>
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
                    <p>The Betila (বেতিলা) House in Manikganj was built about a century ago by Jyoti Babu (জ্যোতি বাবু) and Satya Babu (সত্য বাবু), a couple of affluent merchants involved in the trade of Jute, the golden fibre of Bangladesh. This palatial house is located in a remote area named Betila which is within the parameters of the modern day Manikganj proper. Explorers/travelers searching for heritage sites in Manikganj over the internet may come across several links of the famous Baliati Zamindar’s Palace but never find any links on Betila. This is primarily because the Betila House was not a Zamindar’s (Land Owner) palace, and secondly since it is located in such a remote area, people hardly know about it. Rich people of those era are known to build such palatial houses in remote areas and live lavish lives, even though they were not ‘Zamindars’ or royalty.

For someone looking for heritage sites, the Betila Mitra Union of Manikganj would be a fabulous one to come across. It’s situated in semi rural setting (being not too distant from urban areas) and doesn’t seem particularly unique on first impression but once you begin to explore it’s culture and heritage, beautiful places like the Betila House amongst several others begin to surface. The seemingly tame Betila Canal runs across the area, connecting two major rivers Kaliganga (কালিগঙ্গা) and Dhaleshwari (ধলেশ্বরী) but like most waterways of Bangladesh, one can anticipate its ferocity in full monsoon season when rising water levels which is also evident in the way it has eroded both its banks, specially at the lone bridge that was constructed some time back.

On both the banks one will come across a series of heritage buildings, the pinnacle being on the eastern bank, the Betila Palatial house surrounded by rich foliage. It’s a combined structure of two separate buildings both of which are two-storied, standing almost intact, side by side and with an expansive open field before them.</p>
                    
        </div>
    </section>
    <div class="dropdown-divider"></div>

    <section class="container title">
        <div class="tt">
            <h3>Location & Map</h3>
        </div>
    </section>
    <section class="container map"> <iframe
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.470705386337!2d90.02229181538932!3d23.837413584546464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755f5c721d83a03%3A0xd3bf4bf3eddab17b!2sBetila%20Landlord&#39;s%20House!5e0!3m2!1sen!2sbd!4v1608864834483!5m2!1sen!2sbd" width="1000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
