<?php
class customer_db
{
    //connection function
    function opencon(){
    $DBHostname="localhost";
    $DBUsername="root";
    $DBPass="";
    $DBName="laundry_service";

$conn=new mysqli($DBHostname, $DBUsername, $DBPass, $DBName);
if($conn->connect_error)
{
    echo "Unable to create connection object".$conn->connect_error;
}
return $conn;
}
//query function
    function InsertCustomer_data($c_fullname, $c_username, $c_email	, $c_number, $c_birthday, $c_pass, $c_gender, $c_address, $c_role, $tablename, $conn){
    $sqlstr="INSERT INTO $tablename(c_fullname, c_username, c_email, c_number, c_birthday, c_pass, c_gender, c_address, c_role) values ('$c_fullname', '$c_username', '$c_email', '$c_number', '$c_birthday', '$c_pass', '$c_gender', '$c_address', '$c_role')";
    return $conn->query($sqlstr);
}
function InsertLogin_data($login_username, $login_email, $login_password, $login_role, $conn){
    $sqlstr="INSERT INTO login_info (login_username, login_email, login_password, login_role) values ('$login_username', '$login_email', '$login_password', '$login_role')";
    return $conn->query($sqlstr);
    //echo $sqlstr;
}

//check if username already exists
function check_username($customer_username, $tablename, $conn){
    $sqlstr="SELECT c_username FROM $tablename WHERE c_username='$customer_username'";
    return $conn->query($sqlstr);

}
// function check_login($login_username, $login_password, $table_name, $conn){
//     $sqlstr="SELECT * FROM $table_name WHERE login_username='$login_username' AND login_password='$login_password'";
//     return $conn->query($sqlstr);
// }
// function showUser($tablename, $conn){
//     $sqlstr="SELECT * FROM $tablename";
//     return $conn->query($sqlstr);
// }
//close function
function closecon($conn){
    $conn->close();
}

}
?>