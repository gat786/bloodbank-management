<!DOCTYPE html>
<?php include("conn.php");
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blood Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <div id="full">
        <div id="inner-full">
            <div class="" id="header">
            <a href="admin-home.php"><h2 class="text">Blood Bank Management System</h2></a>
            </div>
            <div class="" id="body">
                <?php
                    if(!isset($_SESSION['un'])){
                        header("Location:index.php");
                    }
                ?>
                <br>
                <h1>Exchange Blood Donor List </h1>
                <?php
                //name,fname,address,city,mobile,age,email,bgroup
                ?>
                    <div name="donor-list">
                    

                    <table class="exchange-table" style="margin:auto;">
                        <tr>
                            <td><p class="table_heading">Name</td>
                            <td><p class="table_heading">Fathers Name</td>
                            <td><p class="table_heading">Address</td>
                            <td><p class="table_heading">City</td>
                            <td><p class="table_heading">Mobile No</td>
                            <td><p class="table_heading">Age</td>
                            <td><p class="table_heading">Email</td>
                            <td><p class="table_heading">Blood Group</td>
                            <td><p class="table_heading">Exchange Blood Group</td>
                        </tr>

                        <?php
                            $sql = "SELECT * FROM exchange_blood;";
                            $query = $pdo->prepare($sql);
                            $query->execute();
                            $donors=$query->fetchAll();

                            foreach($donors as $donor){
                                echo 
                                "<tr>".
                                "<td>".$donor['name']."</td>".
                                "<td>".$donor['fname']."</td>".
                                "<td>".$donor['address']."</td>".
                                "<td>".$donor['city']."</td>".
                                "<td>".$donor['mobile']."</td>".
                                "<td>".$donor['age']."</td>".
                                "<td>".$donor['email']."</td>".
                                "<td>".$donor['bgroup']."</td>". 
                                "<td>".$donor['ebgroup']."</td>". 
                                "</tr>";


                            }
                        ?>

                    </table>


                    </div>


            </div>
            <div class="" id="footer">
                    <p><a href="logout.php">Logout</a></p>

            </div>
        </div>
    </div>
</body>
</html>