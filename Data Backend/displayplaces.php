<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/dis_style.css">
    <title>Place Data</title>
</head>
<body>
<section class="reg_name">
        <h1>New Suggested Places</h1>
    </section>
    <table class="tab" border="2">
    <tr class="tab_att">
        <th>ID</th>
        <th>User</th>
        <th>Email</th>
        <th>Division</th>
        <th>District</th>
        <th>Description</th>
    </tr>

    <?php
        include("newplace_connection.php");
        error_reporting(0);
        $query = "select * from place_suggest";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data)){
                echo "
                <tr>
                    <td>".$result['id']."</td>
                    <td>".$result['user']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['division']."</td>
                    <td>".$result['district']."</td>
                    <td>".$result['description']."</td>
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


