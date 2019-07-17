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
<script type="text/javascript" src="equipment.js"></script>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  
  <link href="bootstrapsignup.css" rel="stylesheet" type="text/css" media="all" />
  
  
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="bootstrapsignup.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="test.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
</head>



<body>

<ul>
  <li><a class="active" href="./homepage.php">Home</a></li>
  <li><a href="./equipment.php">Equipment</a></li>

  <li><a href="./roomtimes.php">Check Rooms</a></li>
  <li><a href="./login.php">Login</a></li>
  <li><a href="./registration.php">SignUp</a></li>
</ul>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
<div class="container">


  <h2 style = "color:white">Please Click on Type of Equipment to View Available Rooms</h2>
  <div class="panel-group">
    <div class="panel panel-default">
    
      <div class="panel-heading">Projector Rooms</div>
      <div class="panel-body">Projectors</div>
      <button onclick="myFunction1()">Check Rooms</button>
      
<div id="myDIV1" style="display: none;">
            SCR3, SCR2, 1.01, 3.01, Kelly Theatre, 3.04, Liffey Suite, Mayor Suite, Oriel Suite
</div>
    </div>

    <div class="panel panel-primary">
    
      <div class="panel-heading">Computer Rooms</div>
      
      <div class="panel-body">Computers</div>
      <button onclick="myFunction2()">Check Rooms</button>
<div id="myDIV2" style="display: none;">
            SCR3, SCR2, 3.01, 3.04, Liffey Suite, Mayor Suite, Oriel Suite
</div>
    </div>

    <div class="panel panel-success">
      <div class="panel-heading">Socket Rooms</div>
      <div class="panel-body">Sockets</div>
      <button onclick="myFunction3()">Check Rooms</button>
<div id="myDIV3" style="display: none;">
            SCR3, SCR2, 3.01, 3.04
</div>
    </div>

    <div class="panel panel-info">
      <div class="panel-heading">Microphone Rooms</div>
      <div class="panel-body">Microphone</div>
      <button onclick="myFunction4()">Check Rooms</button>
<div id="myDIV4" style="display: none;">
            SCR3, SCR2, 1.01, 3.01, Kelly Theatre, 3.04
</div>
    </div>

    <div class="panel panel-warning">
      <div class="panel-heading">Seated Only Rooms</div>
      <div class="panel-body">Seated</div>
      <button onclick="myFunction5()">Check Rooms</button>
<div id="myDIV5" style="display: none;">
            1.01, Kelly Theatre 
</div>
</div>

    <div class="panel panel-danger">
      <div class="panel-heading">Tiered Seating Rooms</div>
      <div class="panel-body">Tiered</div>
      <button onclick="myFunction6()">Check Rooms</button>
<div id="myDIV6" style="display: none;">
            Kelly Theatre
</div>
</div>
    
    <a href="homepage.html" class="forgot-password">
                Home Page
            </a>
    
  
</div>

</body>
</html>
