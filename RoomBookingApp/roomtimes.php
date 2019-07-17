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
<body>




<ul>
  <li><a class="active" href="./homepage.php">Home</a></li>
  <li><a href="./equipment.php">Equipment</a></li>
  <li><a href="./roomtimes.php">Check Rooms</a></li>
  <li><a href="./login.php">Login</a></li>
  <li><a href="./registration.php">SignUp</a></li>
</ul>


</body>
<html>
<head>
<title>Select Time</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="main-w3layouts wrapper">
<!-- Custom Theme files -->
<link href="bootstrapsignup.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="test.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

<!-- //web font -->
</head>
<body>

    <div>
        <?php     
            $value = $_POST['time'];
            $value = $_POST['equipment'];
        ?>
    </div>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Select Time To Check If Available</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			 <div class="box">
			    <form action="time.php" method="POST" id="sign">
                    <select name="time">
                        <option value=9>9:00 am</option>
                        <option value=10>10:00 am</option>
                        <option value=11>11:00 am</option>
                        <option value=12>12:00 pm</option>
                        <option value=13>1:00 pm</option>
                        <option value=14>2:00 pm</option>
                        <option value=15>3:00 pm</option>
                        <option value=16>4:00 pm</option>
                        <option value=17>5:00 pm</option>
                    </select>
                    <select name="equipment">
                        <option value="projector">Projectors</option>
                        <option value="computer">Computers</option>
                        <option value="socket">Sockets</option>
                        <option value="microphone">Microphone</option>
                        <option value="seated">Seated</option>
                        <option value="tiered">Tiered</option>
                    </select>
                <br><br>
                </div>
                <input type="submit" value="Check Availability">
                </form>
			     
			     
				
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© Team Orange</p>
		</div>
		<!-- //copyright -->
		
	</div>
</body>
<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
</html>
