<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/dis_style.css">
    <title>Place Data</title>

    <style type="text/css">
        * {
    margin: auto;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #2b0fa8a9;
    padding: 50px;
}

.reg_name {
    color: white;
    text-align: center;
    font-size: 25px;
    margin: 20px;
    text-decoration: underline;
}

.tab {
    color: #000000;
    text-align: center;
    font-size: 25px;
    border: 5px solid black;
    font-weight: 600;
}

.tab_att {
    color: #ffffff;
    text-align: center;
    font-size: 22px;
    font-weight: bolder;
}
.new{
    padding-bottom: 50px;
}
.new ul{
    list-style-type: none;
    
}

.new ul a{
    text-decoration: none;
    border: 1px solid black;
    float: right;
    padding: 7px 4px;
    background-color: #0000006e;
}

.new ul a:hover{
    border: 1px solid red;
    background-color: #ff00008c;
    color:black;
}
.new ul a li{
    float: right;
    color: white; 
    font-size: 25px; 
}

.new ul a li:hover{
    color:black; 
}

</style>

</head>

<body>

<div class="new">
        <ul>
            <a href="display.php"><li>User Login Info</li></a> 
        </ul>
    </div>

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


