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
                <h1>Welcome Admin</h1>
                <ul>
                    <li><a href="donor-reg.php">Donor Registration</a></li>
                    <li><a href="donor-list.php">Donor List</a></li>
                    <li><a href="stock.php">Stock Blood List</a></li>
                </ul>
                <br><br><br>
                <ul>
                    <li><a href="empty-stock.php">Out Stock Blood List</a></li>
                    <li><a href="exchange.php">Exchange Blood List</a></li>
                    <li><a href="ngo.php">NGO List</a></li>
                </ul>


            </div>
            <div class="" id="footer">Footer
                    <p><a href="logout.php">Logout</a></p>

            </div>
        </div>
    </div>
</body>
</html>