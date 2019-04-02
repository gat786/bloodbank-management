<!DOCTYPE html>
<?php 
    include("conn.php");
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
                <h2 class="text">Blood Bank Management System</h2>
            </div>
            <div class="" id="body">
                <br><br><br><br><br>
                <form action="" method="post">
                    <table align="center">
                        <tr>
                            <td width="200px" height="70px">
                                <b>Enter UserName</b>
                            </td>
                            <td width="200px" height="70px">    
                                <input  class="textfield"  width="100px" height="50px" name="un" placeholder="Enter Username">
                                    
                                </input>
                            </td>
                        </tr>
                        
                        <tr>
                            <td width="200px" height="70px">
                                <b>Enter Password</b>
                            </td>
                            <td width="200px" height="70px">    
                                <input type="password" class="textfield" name="ps" width="100px" height="50px" placeholder="Enter Password">
                                    
                                </input>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" class="button" name="sub" value="L ogin">
                            </td>
                        </tr>

                    </table>
                </form>
                <?php
                if(isset($_POST['un']) and isset($_POST['ps'])){
                    $un=$_POST['un'];
                    $ps=$_POST['ps'];
                    $sql = 'SELECT * FROM admin where name=?';
                    $query = $pdo->prepare($sql);
                    $query->execute([$un]);
                    $users = $query->fetchAll();
                    if(isset($users[0])){
                        if ($users[0]['password'] == $ps)
                        {
                            $_SESSION['un'] = $un;
                            header("Location:admin-home.php");
                        }
                        else{
                            echo "<script>alert(\"wrong password\")</script>";
                        }
                    }else{
                        echo "User doesn't exist";
                    }
                }
                ?>
            </div>
            <div class="" id="footer"></div>
        </div>
    </div>
</body>
</html>