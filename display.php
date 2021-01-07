<?php
 include('connection.php');

 $selectquery = "select & form place_suggest ";
 $query = mysqli_query($con,$selectquery);

 $nums = mysqli_num_rows($query);

 $res = mysqli_fetch_array($query)

 echo $res[1];
 ?>
