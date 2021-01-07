<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/dis_style.css">
    <title>User Login Data</title>
</head>
<body>
<section class="reg_name">
        <h1>User Login Table</h1>
    </section>
    <table class="tab" border="2">
    <tr class="tab_att">
        <th>ID</th>
        <th>User Name</th>
        <th>Email Address</th>
        <th>Password</th>
    </tr>

    <?php
        include("reg_connection.php");
        error_reporting(0);
        $query = "select * from userlogin";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data)){
                echo "
                <tr>
                    <td>".$result['id']."</td>
                    <td>".$result['username']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['password']."</td>
                </tr>
                ";
            }
        }

        else{
            echo "No record found";
        }
    ?>


    </table>
</body>
</html>


