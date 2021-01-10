<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhaka Division</title>
    <link rel="stylesheet" href="CSS/dhk_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif !important;
}

.navbar {
    background-color: #311b92;
    position: fixed;
} 


.navbar-brand {
    font-size: 30px !important;
    font-family: fantasy !important;
    color: #ffffff;
}

.nav-item{
    margin-left: 20px;
}

.nav-link{
    color: #ffffff !important;
}

.carousel-item{
    width: 100%;
    height: 100%;
}


.container.info {
    position: relative;
    display: flex;
    justify-content: left;
    align-items: left;
    margin-top: 80px;

}

.container.info .txt {

    color: gray;

}

.info-content {
    color: rgb(8, 8, 8);
    width: 100%;
    padding-top: 10px;
}


.info-content p {
    margin-bottom: 30px;
    font-size: 15px;
    letter-spacing: 1px;
    color: gray;
    font-weight: 500;

}

/*End Banner*/

/*District*/

.dropdown-divider {
    margin: 60px;
    padding: .3px;
    width: 100%;
    background-color: gray;
}

.container.title {
    position: relative;
    display: flex;
    justify-content: left;
    align-items: left;
    margin-top: 40px;

}

.container.title .tt {

    color: gray;

}
.container.title .tt a h4{
    color: gray;
    text-decoration: none;
    margin-bottom: 20px;
}


.district {
    width: 90%;
    height: 100%;
    margin: 5px auto 0;
    display: table;
    box-sizing: border-box;
    padding-bottom: 50px;
    padding-left: 140px;
    border-bottom: 1px solid #cccccc;
}

.row {
    margin: 20px 0px;
}

.column {
    display: table-cell;
    margin: 5px;
    border-right: 20px solid white;
    border-radius: 50px;
}

.card {
    width: 250px;
    height: 200px;
    padding: 2rem 1rem;
    background: #fff;
    position: relative;
    display: flex;
    align-items: flex-end;
    box-shadow: 5px 2px 10px 2px rgba(0, 0, 0, 0.5);
    transition: 0.8s ease-in-out;

}

.card:hover {
    transform: none;
}

.card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    transition: 0.8s all;
    opacity: 0;
}

.card:hover ::before {
    opacity: 1;
}

.card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 2px;
    transform: scale(1);
    transition: 0.3s ease-in-out;
}

.card img:hover {
    transform: scale(1.07);
}

.card .info {
    position: relative;
    z-index: 4;
    color: #fff;
    opacity: 0;
    transform: scale(1);
    transition: 0.5s all;
    margin: 100px 0px 100px 0px;
}

.card:hover .info {
    opacity: 1;
    transform: scale(1.2);
}

.card .info h4 {
    margin: 10px 0px;
    color: rgba(255, 255, 255, 0.918);
    font-weight: bold;

}

#more {
    display: none;
}


#readMore {
    cursor: pointer;
    font-size: 15px;
    font-weight: bolder;
    border: 1px solid black;
    border-radius: 10px;
    padding: 5px;
    margin: 5px;
    color: rgb(73, 68, 68);
    background-color: rgb(187, 255, 0);
}

/*End District*/
/*Footer*/
.footer {
    width: 100%;
    background: #311b92;
    display: block;
    padding-top: 5px;

}

.inner-footer {
    width: 100%;
    margin: auto;
    padding: 30px 10px;
    display: flex;
    flex-wrap: wrap;
    box-sizing: border-box;
    justify-content: center;
}

.footer-items {
    width: 25%;
    box-sizing: border-box;
    color: white;
    font-size: 25px;
    text-align: center !important;
    line-height: 20px;
}

h2 {
    padding: 0 30px;
    margin: 10px 30px;
    color: white;
    font-size: 18px !important;
}

.footer-bottom {
    padding: 0 10px;
    color: white !important;
    font-size: 18px !important;
    text-align: center;
}
    </style>

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
              <img src="image/Dhaka/dhakacover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Lalbagh Fort</h1>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/Dhaka/NATIONAL MUSEUM.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>NATIONAL MUSEUM</h1>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/Dhaka/Gopalganjcover.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Gopalganj</h1>
              </div>
            </div>
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
            <h4>Introduction</h4>
            <div class="container-fluid">
                <div class="info-content">
                    <p>Dhaka Division (Bengali: ঢাকা বিভাগ, Ḑhaka Bibhag) is an administrative division within
                        Bangladesh. The capital and largest city is Dhaka. The Division as constituted prior to 2015
                        covered an area of 31,051 km2, and had a population of 47,424,418 at the 2011 Census. However,
                        following the separation of the new Mymensingh Division in 2015, the area has been reduced to
                        20,508.8 km2 with a population at the 2011 Census of 36,433,505.</p>
                         

                </div>
            </div>
        </div>
        
    </section>
    <div class="dropdown-divider"></div>

    <section class="container title">
        <div class="tt">
 
            <h4>District</h4>
        </div>
    </section>

    <section>
        <!--District-->
        <div class="container district">
            <div class="row">
                <div class="column">
                    <div class="card">
                        <a href="dhka_dis_p.php"><img src="image/Dhaka_Dist/Dhaka.jpg"></a>
                        <div class="info">
                            <h4>Dhaka</h4>

                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <a href="faridpur_dis.php"> <img src="image/Dhaka_Dist/faridpur.jpg"></a>
                        <div class="info">
                            <h4>Faridpur</h4>

                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <a href="gazi_dis_p.php"><img src="image/Dhaka_Dist/gazipur.jpg"></a>
                        <div class="info">
                            <h4>Gazipur</h4>

                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <a href="gopal_dis.php"><img src="image/Dhaka_Dist/gopalganj.jpg"></a>
                        <div class="info">
                            <h4>Gopalganj</h4>

                        </div>
                    </div>
                </div>
            </div>
            <span id="dots"></span>
            <span id="more">
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <a href="kishoreganj_dis.php"><img src="image/Dhaka_Dist/kishorganj.png"></a>
                            <div class="info">
                                <h4>Kishoreganj</h4>

                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <a href="madaripur.php"><img src="image/Dhaka_Dist/Madaripur.jpg"></a>
                            <div class="info">
                                <h4>Madaripur</h4>

                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <a href="manikganj.php"><img src="image/Dhaka_Dist/Manikganj.png"></a>
                            <div class="info">
                                <h4>Manikganj</h4>

                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <a href="munshiganj.php"><img src="image/Dhaka_Dist/Munshiganj.jpg"></a>
                            <div class="info">
                                <h4>Munshiganj</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <div class="card">
                            <a href="narayanganj.php"><img src="image/Dhaka_Dist/Naraynganj.jpg"></a>
                            <div class="info">
                                <h4>Narayanganj</h4>

                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <a href="Narsingdi.php"><img src="image/Dhaka_Dist/Narsingdi.jpg"></a>
                            <div class="info">
                                <h4>Narsingdi</h4>

                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <a href="Rajbari.php"><img src="image/Dhaka_Dist/Rajbari.jpg"></a>
                            <div class="info">
                                <h4>Rajbari</h4>

                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <a href="Shariatpur.php"><img src="image/Dhaka_Dist/Shariatpur.jpg"></a>
                            <div class="info">
                                <h4>Shariatpur</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <div class="card">
                            <a href="Tangail.php"><img src="image/Dhaka_Dist/Tangail.jpg"></a>
                            <div class="info">
                                <h4>Tangail</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </span>
            <div class="READMORE">
                <a id="readMore">See More...</a>
            </div>

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