<?php

$Username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$ConfirmPassword = $_POST['confirmpassword'];

if (!empty($username) || !empty($email) || !empty($password) || !empty($confirmpassword)) {
    
    $host = "127.0.0.1";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "roombookersignup";
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if(mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        
    } else {
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        
    }
    }else{
        echo "All Fields are Required";
        die();
}

?>