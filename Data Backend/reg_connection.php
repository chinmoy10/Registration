<?php

    $username = "root";
    $password = "";
    $server = "localhost";
    $db = "registration";


    $conn = mysqli_connect($server,$username,$password,$db);


    if($conn){
    //echo "Connection Successful";//
    ?>

    <script>
        alert('Connection Successful');
    </script>

    <?php
        }
    else{
        echo "No connection";
    
    }

?>