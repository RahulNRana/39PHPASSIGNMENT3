<?php
    session_start();
    if(!isset($_SESSION['loginid']))
    {
        header("location:adminlogin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>
      div.header{
        font-family: poppins; 
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 60px;
        background-color: steelblue;
      }

      div.header button{
        font-size: 15px;
        color: aliceblue;
        background-color: black;
        border-style: groove;
        border-color: red;
      }

      div.header1{
        text-align: center;
        font-size: 30px;
      }
    </style>
</head>
<body style="margin: 0px;">
    <div class="header">
        <h1>Welcome Admin: <?php echo $_SESSION['loginid'] ?></h1>
        <form method="post">
            <button name="logout">Logout</button>
        </form>
    </div><br><br>
    <!-- text-align: center;background-color:blue;color: black -->
    <div class="header1">  
    <a href="addcategory.php">Add Category</a><br><br>
    <a href="addproduct.php">Add Products</a><br>
    </div>  
    <?php
        if(isset($_POST['logout']))
        {
            session_destroy();
            header("location:adminlogin.php");
        }
    ?>
</body>
</html>