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
                <h1>Donor Registration</h1>
                <form action="" method="post">
                    <div class="form" id="donor_reg_table">
                        <center>
                            <table>
                                <tr><td class="column_desc">Enter Name</td>
                                    <td>
                                        <input type="text" name="name" id="" class="donor-reg-text" required="required" placeholder="Enter Name">
                                    </td><td class="column_desc">Enter Father's name</td>
                                    <td>
                                        <input type="text" name="fathername" id="" class="donor-reg-text" required="required" placeholder="Enter Father's Name">
                                    </td>
                                </tr>
                                <tr><td class="column_desc">Enter Address</td>
                                    <td>
                                        <textarea name="address" id="" cols="20" rows="4" class="donor-reg-text" required="required" placeholder="Enter Address"></textarea>
                                    </td><td class="column_desc">Enter City Name</td>
                                    <td>
                                        <input type="text" name="city" id="" class="donor-reg-text" required="required" placeholder="Enter City Name">
                                    </td>
                                </tr>
                                <tr><td class="column_desc">Enter Mobile Number</td>
                                    <td>
                                        <input type="number" name="mobile-number" class="donor-reg-text" id="" placeholder="Enter Mobile Number">
                                    </td><td class="column_desc">Enter Age </td>
                                    <td>
                                        <input type="number" name="age" id="" class="donor-reg-text" placeholder="Enter Age">
                                    </td>
                                </tr>
                                <tr><td class="column_desc">Enter Email Address</td>
                                    <td>
                                        <input type="email" name="email" id="" class="donor-reg-text" placeholder="Enter Email Address">
                                    </td><td class="column_desc">Enter Blood Group</td>
                                    <td>
                                        <select required name="bloodgroup" id="" class="donor-reg-text">
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
                                </tr>
                                <tr>
                                    <td colspan=4 class="submit_td">
                                        <input type="submit" name='sub' class="submit-button" value="Submit">
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </div>
                    
                </form>
                <?php
  
                    if(isset($_POST['sub']))
                    {
                        $name = $_POST['name'];
                        $fname = $_POST['fathername'];
                        $address = $_POST['address'];
                        $city = $_POST['city'];
                        $bgroup = $_POST['bloodgroup'];
                        $age = $_POST['age'];
                        $mobile = $_POST['mobile-number'];
                        $email = $_POST['email'];

                        $sql = "INSERT INTO donor_registeration (name,fname,address,city,mobile,age,email,bgroup) VALUES (:name,:fname,:address,:city,:mobile,:age,:email,:bgroup)";

                        $query = $pdo->prepare($sql);
                        $query->execute(['name'=> $name,'fname'=> $fname,'address' =>$address,'city' =>$city,'mobile'=>$mobile,'age'=>$age,'email'=>$email,'bgroup'=>$bgroup]);
                    }
                ?>
            </div>
            <div class="" id="footer">
                    <p><a href="logout.php">Logout</a></p>

            </div>
        </div>
    </div>
</body>
</html>