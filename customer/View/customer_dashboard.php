<?php
include("../control/customerSession_check.php");
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
            <h3>Online Laundry Service</h3>
    </header>
        <center>
            <img src="../images/Best_Laundry.jpg" alt="dashboard banner" width="600">
        </center>
        <a href="customer_dashboard.php">Dashboard</a><br>
        <a href="customer_profile.php">Profile</a><br>
        <a href="customer_dashboard.php">Order History</a><br>
        <a href="customer_dashboard.php">Contact Us</a><br>
        <a href="../control/logout.php" name ="Logout">Logout</a>
</body>
</html>