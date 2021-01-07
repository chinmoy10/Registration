<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagla Mosque</title>
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
              <img src="image/Dhaka_Dist/Kishoreganj/paglacover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Pagla Mosque</h1>
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
                    <p>Pagla Jame Masjid, (Bengali: পাগলা জামে মসজিদ), known locally as Raypur Boro Masjid, (Bengali: রায়পুর বড় মসজিদ, Arabic: جامع رايفور الكبير‎), is a mosque in the village of Raypur, Paschim Pagla, South Sunamganj, Sunamganj District, Bangladesh. It lies on the banks of the Mahashing River. It was built by a local businessman called Yasin Mirza.It is a two-storey building. In front of the building is a large eidgah. There is a gate on the north side. The building has three domes.


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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3632.1954754020694!2d90.76932731539904!3d24.444002484252024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37569216112b2d7f%3A0x2d1e89bf697a511b!2sPagla%20Masjid!5e0!3m2!1sen!2sbd!4v1608789831599!5m2!1sen!2sbd" width="1000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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