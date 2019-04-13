<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php 
    include("../conn.php");
    session_start();
 ?>

<div class="header">
	<div class="logo"><h2>Blood Bank Management System</h2></div>
	<div class="nav">
		<div id="a"><a href="index.php">Home</a></div>
		<div id="b"><a href="about.php">About Us</a></div>
		<div id="c"><a href="contact.php">Contact Us</a></div>
		<div id="d"><a href="login.php">Login</a></div>
	</div>
</div>
    <form action="" method="post">
        <div class="check-module">
            <table id="exchange_table">
                <tr>
                    <td>Select needed blood Type</td>
                    <td>
                        <select required name="bloodtype" id="">
                            <option value=""> Select </option>
                            <option value="ap"> A positive </option>
                            <option value="an"> A negative </option>
                            <option value="abp"> AB positive </option>
                            <option value="abn"> AB negative </option>
                            <option value="bp"> B positive </option>
                            <option value="bn"> B negative </option>
                            <option value="op"> O positive </option>
                            <option value="on"> O negative </option>
                        </select>
                    </td>
                    <td>
                        <input type="submit" name="sub" value="Check">
                    </td>
                </tr>
            </table>
        </div>
    </form>

    <?php
        if(isset($_POST['sub'])){
            $bgroup=$_POST['bloodtype'];
            
            $sql = "SELECT * FROM donor_registeration WHERE bgroup=:bgroup";
            $query = $pdo->prepare($sql);
            $query->execute(['bgroup'=>$bgroup]);
            
            $required = $query->fetch();

            if($required){
                echo '<script language="javascript">';
                echo "alert('Available')";
                echo '</script>';
            }
            else{
                
                echo '<script language="javascript">';
                echo "alert('Sorry Not available')";
                echo '</script>';
            }
        }
    ?>

<div class="footer"><br><h2 align="center">Copyright</h2></div>
</body>
</html>