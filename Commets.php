<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Places</title>
    <link rel="stylesheet" href="CSS/comment_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="home-1.php">GhurboBD</a>
        
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <!--<li class="nav-item">
                <a class="nav-link" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Disabled</a>
              </li>-->
            </ul>
          </div>
        </div>
  </nav>
     
     <section class="my-3">
         <div class="p-3">
             <h3 class="text-center">New Places Suggestions </h3>
         </div>
         <div class="w-50 m-auto">
             <form action="userinfo.php" method="POST">
                 <div class="form-group">
                     <input type="text" name="user" placeholder="Name*" autocomplete="off" class="form-control">
                 </div>
                 <div class="form-group">
                    <input type="text" name="email" placeholder="Email*" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="division" placeholder="Division*" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="district" placeholder="District*" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Spot Name, Time, Location and Spot Description*" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
             </form>
         </div>
     </section>



     <section class="extra"></section>


    <section >
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

    

</body>
</html>