<?php include('connection.php'); ?>
<?php
mysqli_select_db($con, 'placessuggestion');

$user = $_POST['user'];
$email = $_POST['email'];
$division = $_POST['division'];
$district = $_POST['district'];
$description = $_POST['description'];


$query = "insert into place_suggest (user, email, division, district, description)
values('$user', '$email', '$division', '$district', '$description')";

mysqli_query($con,$query );

echo "$query";
header('location:home-1.php');

?>