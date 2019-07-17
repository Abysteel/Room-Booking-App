<?php

session_start();

if(isset($_POST['login'])) {
    
    include 'logindb.php';
    
    $uid = mysqli_real_escape_string($conn, $_POST['username']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);
    
    //Error handlers
    //Check if inputs are empty
    if(empty($uid) || empty($pwd)) {
        header("Location: ./login.php?login=InputEmpty");
            exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$uid' OR email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ./login.php?login=WrongUsername");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)) {
                //De-hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['password']);
                if($hashedPwdCheck == false) {
                    header("Location: ./login.php?login=WrongPassword");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //Log in the user here
                    $_SESSION['u_id'] = $row['id'];
                    $_SESSION['u_first'] = $row['firstname'];
                    $_SESSION['u_last'] = $row['lastname'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_uid'] = $row['username'];
                    header("Location: ./homepage.php?login=success");
                    exit();
                }
            }
        }
    }
}else {
    header("Location: ./login.php?login=error");
    exit();
}
?>