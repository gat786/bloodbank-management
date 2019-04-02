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
                <h1>Donor List According to Blood Group</h1>
                <?php
                //name,fname,address,city,mobile,age,email,bgroup
                ?>
                    <div name="stock-list">

                    <table>
                        <tr>
                            <th>Blood Group</th>
                            <th>Donors</th>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM donor_registeration;";
                            $query = $pdo->prepare($sql);
                            $query->execute();
                            $donors=$query->fetchAll();

                            $ap=0;
                            $an=0;
                            
                            $bp=0;
                            $bn=0;
                            
                            $abp=0;
                            $abn=0;

                            $op=0;
                            $on=0;

                            foreach($donors as $donor){
                                if($donor['bgroup']=='ap'){
                                    $ap=$ap+1;
                                }elseif($donor['bgroup']=='an'){
                                    $an=$an+1;
                                }elseif($donor['bgroup']=='bp'){
                                    $bp=$bp+1;
                                }elseif($donor['bgroup']=='bn'){
                                    $bn=$bn+1;
                                }elseif($donor['bgroup']=='abp'){
                                    $abp=$abp+1;
                                }elseif($donor['bgroup']=='abn'){
                                    $abn=$abn+1;
                                }elseif($donor['bgroup']=='op'){
                                    $op=$op+1;
                                }elseif($donor['bgroup']=='on'){
                                    $on=$on+1;
                                }
                            }
                            echo "
                            <tr>
                                <td>A Positive </td>
                                <td> $ap </td>
                            </tr>
                            <tr>
                                <td>A Negative </td>
                                <td> $an </td>
                            </tr>
                            <tr>
                                <td>B Positive </td>
                                <td> $bp </td>
                            </tr>
                            <tr>
                                <td>B Negative </td>
                                <td> $bn </td>
                            </tr>
                            <tr>
                                <td>AB Positive </td>
                                <td> $abp </td>
                            </tr>
                            <tr>
                                <td>AB Negative </td>
                                <td> $abn </td>
                            </tr>
                            <tr>
                                <td>O Positive </td>
                                <td> $op </td>
                            </tr>
                            <tr>
                                <td>O Negative </td>
                                <td> $on </td>
                            </tr>
                            ";
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