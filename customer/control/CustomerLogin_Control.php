<?php 
include("process.php");
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_POST["register"])) {
    header("Location: ../../home/view/registrationRole.php");
}
$HasError1 = 0;
$usernameError = "";
$userPass_Error = "";

// error_reporting (E_ALL ^ E_NOTICE); 
// if(isset($_COOKIE["User_name"])) { 
// 	<meta http-equiv="refresh" content="20">
// echo $_COOKIE['User_name'];
// }else{

//customer login
$customer_data = file_get_contents('../data/customer_data.json');
$decoded_data = json_decode($customer_data);

if (isset($_POST["submitlogin"])) {
    $selected_role = $_POST['role'];
    if ($selected_role == "customer") {
        foreach ($decoded_data as  $key => $udata) {
            if (($udata->User_name == $_POST["uname"] || $udata->Email == $_POST["uname"]) && $udata->Password == $_POST["password"]) {

                $_SESSION["User_name"] = $_POST["uname"];
                $_SESSION["email"] = $_POST["mail"];
                $_SESSION["Password"] = $_POST["password"];
                if (!empty($_SESSION["User_name"])) {
                    header("Location: ../View/customer_dashboard.php");
                }
            }
            if (empty($_REQUEST["uname"]) || (empty($_REQUEST['password']))) {
                $usernameError = "Enter your user name and password !";
            } else {

                $HasError1 = 1;
            }
        }
      
    } 
    // else {
    //     $_SESSION["User_name"] += 1;
    //     if ($_SESSION["User_name"] > 2) {
    //         header('location:timeout.php');
    //     }
    // }
}
if ($HasError1 == 1) {
    $userPass_Error = "Your username or password is incorrect !";
}



//Rider login
$dm_data = file_get_contents('../../deliveryman/data/dm_data.json');
$decoded_data = json_decode($dm_data);

if (isset($_POST["submitlogin"])) {
    $selected_role = $_POST['role'];
    if ($selected_role == "rider") {
        foreach ($decoded_data as  $key => $udata) {
            if (($udata->User_name == $_POST["uname"]) && $udata->Password == $_POST["password"]) {
                $_SESSION["dmUser_name"] = $_POST["uname"];
                $_SESSION["dmPassword"] = $_POST["password"];
                if (!empty($_SESSION["dmUser_name"])) {
                    header("Location: ../../deliveryman/view/dm_dashboard.php");
                }
            }
            if (empty($_REQUEST["uname"]) || (empty($_REQUEST['password']))) {
                $usernameError = "Enter your user name and password !";
            } else {

                $hasError = 1;
            }
        }
        if ($hasError == 1) {
            $userPass_Error = "Your username or password is incorrect !";
        }
    }
}



//laundry login
$lm_data = file_get_contents('../../laundryman/Data/laundry_data.json');
$ldd_data = json_decode($lm_data);

if (isset($_POST["submitlogin"])) {
    $selected_role = $_POST['role'];
    if ($selected_role == "laundry") {
        foreach ($ldd_data as  $key => $udata) {
            if (($udata->Username == $_POST["uname"]) && $udata->Password == $_POST["password"]) {
                //$_SESSION["dmUser_name"] = $_POST["uname"];
               // $_SESSION["dmPassword"] = $_POST["password"];
                header("Location: ../../laundryman/view/laundryman_dashboard.php");
            }
            if (empty($_REQUEST["uname"]) || (empty($_REQUEST['password']))) {
                $usernameError = "Enter your user name and password !";
            } else {

                $hasError = 1;
            }
        }
        if ($hasError == 1) {
            $userPass_Error = "Your username or password is incorrect !";
        }
    }
}





?>