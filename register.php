<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>

  <div class="social_media">
    <div class="item">
      <i class="fab fa-facebook-f"></i>
    </div>
    <div class="item">
      <i class="fab fa-google-plus-g"></i>
    </div>
  </div>

  	<div class="input-group">
  	  <input type="text" placeholder="Name" name="username"  value="<?php echo $username; ?>" required>
  	</div>
  	<div class="input-group">
  	  <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
  	</div>
  	<div class="input-group">
  	  <input type="password" placeholder="Password" name="password_1" required>
  	</div>
  	<div class="input-group">
  	  <input type="password" placeholder="Confirm Password" name="password_2" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>