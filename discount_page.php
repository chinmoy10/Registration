<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahsan Manzil</title>
    <link rel="stylesheet" href="CSS/dhk_places_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php include 'style.php' ?>

    <style type="text/css">

        .discount{
            margin: auto;
            padding: 0;
        }
        .row{
            margin-left: 100px;
            margin-right: 100px;
        }

        .offer_place{
            padding-bottom: 50px;
        }
        
        .offer{
            border: 3px solid rgb(24, 5, 5);
            width: 100%;
            border-radius: 5px;
            max-width: 400px;
            
            
        }

        .offer_title{
            color: black;
            font-size: 25px;
            text-align: center;
        }
        
        .con{
            padding: 1px 25px;
            width: 100%;
            text-align: justify;
            font-size: 14px;
        }
        .code{
            background: yellowgreen;
            padding: 5px;
        }
        .code_no{
            color: blue;
            padding: 5px;
        }
        .expire{
            color: red;
        }
        .date{
            color: rgb(68, 131, 224);
            font-size: 15px;
        }

    </style>

</head>
<body>
    <?php include 'navbar-1.php' ?>
    
    <section class="container-fluid discount">
        <div class="row">
            <div class="col s6 m3">
                <div class="offer_place">
                    <div class="offer">
                        <img src="img/Discount/221447028.jpg" style="width: 100%;">
                        <div class="con" style="background-color: white;">
                            <p class="offer_title">Balishira Resort</p>
                            <p style="color: crimson; font-size: 20px; text-align: center;">16% discount off </p>
                            <p> If you want to book this resort for one night for two days then you will get a 16% discount. </p>
                        </div>
                        <div class="con">
                            <p>Use Discount Code: <span class="code">BDGH1234</span> </p>
                            <p>Contact No: <span class="code_no">01766-557760</span> </p>
                            <p class="expire">Offer Date: <span class="date">10 January 2021 - 12 January 2021</span>  </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s6 m3">
                <div class="offer_place">
                    <div class="offer">
                        <img src="img/Discount/Meghpunji.jpg" style="width: 100%;">
                        <div class="con" style="background-color: white;">
                            <p class="offer_title">Meghpunji Resort</p>
                            <p style="color: crimson; font-size: 20px; text-align: center;">12% discount off </p>
                            <p> If you want to book this resort for one night for two days then you will get a 12% discount. </p>
                        </div>
                        <div class="con">
                            <p>Use Discount Code: <span class="code">CFDL2549</span> </p>
                            <p>Contact No: <span class="code_no">01815-761065</span> </p>
                            <p class="expire">Offer Date: <span class="date">16 January 2021 - 18 January 2021</span>  </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s6 m3">
                <div class="offer_place">
                    <div class="offer">
                        <img src="img/Discount/NovemEco.jpg" style="width: 100%;">
                        <div class="con" style="background-color: white;">
                            <p class="offer_title">Novem Eco Resort</p>
                            <p style="color: crimson; font-size: 20px; text-align: center;">20% discount off </p>
                            <p> If you want to book this resort for one night for two days then you will get a 20% discount. </p>
                        </div>
                        <div class="con">
                            <p>Use Discount Code: <span class="code">AST1254L</span> </p>
                            <p>Contact No: <span class="code_no">01709-882001</span> </p>
                            <p class="expire">Offer Date: <span class="date">25 January 2021 - 27 January 2021</span>  </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s6 m3">
                <div class="offer_place">
                    <div class="offer">
                        <a href="img/discount-1/Ruilui.JPG" data-lightbox="mygallery"><img src="img/Discount/Ruilui.jpg" style="width: 100%;"></a>
                        <div class="con" style="background-color: white;">
                            <p class="offer_title">RUILUI Resort</p>
                            <p style="color: crimson; font-size: 20px; text-align: center;">10% discount off </p>
                            <p> If you want to book this resort for one night for two days then you will get a 10% discount. </p>
                        </div>
                        <div class="con">
                            <p>Use Discount Code: <span class="code">FGR7856D</span> </p>
                            <p>Contact No: <span class="code_no">01632-030000</span> </p>
                            <p class="expire">Offer Date: <span class="date">8 January 2021 - 10 January 2021</span>  </p>
                        </div>
                    </div>
                </div>
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