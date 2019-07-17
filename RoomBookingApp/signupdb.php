<?php

if(isset($_POST['submit'])){
    
    include_once 'logindb.php';
    
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    //Error handlers
    //Check for empty fields
    if(empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password)) {
        header("Location: ./registration.php?signup=InputEmpty");
        exit();
    }else {
        //Check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)) {
            header("Location: ./registration.php?signup=UsernameLettersOnly");
            exit();
        }else {
            //Check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ./registration.php?signup=EmailFormatIncorrect");
                exit();
            }else {
                $sql = "SELECT * FROM users WHERE username='$username'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if ($resultCheck > 0) {
                    header("Location: ./registration.php?signup=UsernameTaken");
                    exit();
                }else {
                    //hashing the password
                    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
                    //Insert the user into the database
                    $sql = "INSERT INTO users (firstname, lastname, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$hashedpassword');";
                    mysqli_query($conn, $sql);
                    header("Location: ./login.php?signup=success");
                    exit();
                }
                
            }
        }
    }
    
}else{
    header("Location: ./registration.php");
    exit();
}