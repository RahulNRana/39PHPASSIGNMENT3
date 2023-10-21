<?php
    require("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login Page:</h1>
    <form method="post" action="">
    Enter Admin Email: <input type="text" placeholder="Email" name="adminemail"><br/><br>
    Enter Admin Password: <input type="password" placeholder="Password" name="adminpwd"><br/><br>
        <button type="submit" name="login">Login</button>
    </form>

    <?php
        if(isset($_POST['login']))
        {
            $qry="SELECT * FROM `adminlogin` WHERE `Email`='$_POST[adminemail]' AND `Password`='$_POST[adminpwd]' ";
            $result=mysqli_query($con,$qry) or die("Query Error:Login");

            if(mysqli_num_rows($result)==1)
            {
                session_start();
                $_SESSION['loginid']=$_POST['adminemail'];
                header("location:dashboard.php");
            }
            else
            {
                echo "<script>alert('Incorrect Email Or Password')</script>";
            }
        }
    ?>
</body>
</html>