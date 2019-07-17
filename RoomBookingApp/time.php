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
<script async type="text/javascript" src="//userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/76b4a408fb29d89b96ce5f667bc2d87475d20ee80efa25dfccfc6ef56c309366.js"></script>


  
<ul>
  <li><a class="active" href="./homepage.php">Home</a></li>
  <li><a href="./equipment.php">Equipment</a></li>
  <li><a href="./roomtimes.php">Check Rooms</a></li>
  <li><a href="./login.php">Login</a></li>
  <li><a href="./registration.php">SignUp</a></li>
</ul>
    </div>


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
<div class="main-w3layouts wrapper">
		<h1>Requested Times</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			

<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "rooms";

    // Create connection

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $time = $_POST['time'];
    $equipment = $_POST['equipment'];
    
    
    $sql = "SELECT id, name, time FROM time WHERE time = $time AND equipment = '$equipment'";
    $result = $conn->query($sql);   
    
    if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        //echo instead of $test = $test +
        $test = $test . "Name: " . $row["name"]. " - Time " . $row["time"]. "<br>";
    }
    echo "<p> ~~~~~~AVAILABLE ROOMS~~~~~~ </p> <br><br>";
} else {
    //echo instead of test
    $test = "No Rooms Available :(";
}
echo "<p>" . $test . "</p>";
    
?>
            <form action="roomtimes.php">
                <input type="submit" value="Return" />
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