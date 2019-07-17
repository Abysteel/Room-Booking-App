<?php
    session_start();
    if(!isset($_SESSION['u_id'])){
        header("Location: ./login.php?login=needed");
    }
    
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "userdb";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if(!$conn){
        die("Connection failed: ".mysqli_connection_error());
    }
    if (isset($_SESSION['u_id'])) {
        echo '<form action="logout.php" method="POST">
        <button type="submit" name="submit">Logout</button>
        </form>';
    }
?>

<!DOCTYPE html>
<html>
<head>
</head>
<link href="bootstrapsignup.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="test.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
<body>

<script async type="text/javascript" src="//userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/5f80d6639a35dea7318e2a5e61850b4d4c7680a8b125961a4425300ae0a35c5f.js"></script>


<ul>
  <li><a class="active" href="./homepage.php">Home</a></li>
  <li><a href="./equipment.php">Equipment</a></li>
  
  <li><a href="./roomtimes.php">Check Rooms</a></li>
  <li><a href="./login.php">Login</a></li>
  <li><a href="./registration.php">SignUp</a></li>
  
  
</ul>

<img src="Webp.net-resizeimage.jpg" alt="Student"  >

</body>
<html>
<head>

</body>

</html>