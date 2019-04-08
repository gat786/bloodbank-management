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
            <div class="body">
                
                <?php
                    if(!isset($_SESSION['un'])){
                        header("Location:index.php");
                    }
                ?>
                <br/>
                <h1>Welcome Admin</h1>
                <table class="admin-home-table">
                    <tr>
                        <td class="admin-home-center"><a href="donor-reg.php">Donor Registration</a></td>
                        <td class="admin-home-center"><a href="donor-list.php">Donor List</a></td>
                        <td class="admin-home-center"><a href="stock.php">Stock Blood List</a></td>
                    </tr>
                    <tr>
                        <td class="admin-home-center"><a href="empty-stock.php">Out Stock Blood List</a></td>
                        <td class="admin-home-center"><a href="exchange.php">Exchange Blood Registration</a></td>
                        <td class="admin-home-center"><a href="exchange_list.php">Exchange Blood List</a></td>
                    </tr>
                </table>


            </div>
            <div class="" id="footer">
                    <p><a href="logout.php">Logout</a></p>

            </div>
        </div>
    </div>
</body>
</html>