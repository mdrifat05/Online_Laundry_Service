<?php
class login_cls
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
    function check_login($login_username, $login_password, $table_name, $conn){
    $sqlstr="SELECT * FROM $table_name WHERE login_username='$login_username' AND login_password='$login_password'";
    return $conn->query($sqlstr);
}
    
}
?>