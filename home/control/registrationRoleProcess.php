<?php
    //regisration role selection for cutomer
    if(isset($_POST["c_role"])){
        header("Location: ../../customer/view/customer_registration.php");
    }
    //regisration role selection for Rider
    if(isset($_POST["r_role"])){
        
    }
    //regisration role selection for Laundry
    if(isset($_POST["l_role"])){
        
    }
    //regisration role selection for Admin
    if(isset($_POST["a_role"])){
        header("Location: ../../admin/view/adminRegistration.php");
    }
        
?>