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
    <title>Category Page</title>
    <style>
        div.header{
        font-family: poppins; 
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 60px;
        background-color: steelblue;
      }
    </style>
</head>
<body>
<div class="header">
        <h1>Add Categories</h1>
    </div>
</body>
</html>