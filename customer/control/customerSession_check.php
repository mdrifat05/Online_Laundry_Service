<?php
session_start();
if(isset($_SESSION["User_name"])){
    echo "Welcome ".$_SESSION["User_name"];  
}

if(empty($_SESSION["User_name"])){

    header("Location: ../View/login.php");
}
?>