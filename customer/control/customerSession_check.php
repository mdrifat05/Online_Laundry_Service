<?php
session_start();
if(isset($_SESSION["User_name"])){
    echo "Welcome ".$_SESSION["User_name"];
}
else
{
    header("Location: login.php");
}
?>