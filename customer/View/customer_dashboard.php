<?php
include("../control/customerSession_check.php");
include("../control/customerCookie.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer dashboard</title>
</head>
<body>
    <header>
            <h2 align="center">Online Laundry Service</h2><hr>
    </header>
    <a href="customer_dashboard.php">Dashboard</a><br><br>
        <a href="customer_profile.php">Profile</a><br><br>
        <a href="customer_dashboard.php">Order History</a><br><br>
        <a href="customer_dashboard.php">Contact Us</a><br><br>
        <a href="../control/logout.php" name ="Logout">Logout</a>
        <center>
            <img src="../images/Best_Laundry.jpg" alt="dashboard banner" width="600">
        </center>   
</body>
</html>