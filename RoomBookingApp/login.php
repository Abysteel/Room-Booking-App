<!DOCTYPE html>
<html>
<head>

<!-- //web font -->
</head>
<body>
<ul>
  <li><a href="./login.php">Login</a></li>
  <li><a href="./registration.php">SignUp</a></li>
</ul>


    <div>
        <?php                 
            if(isset($_POST['submit'])){
                $uid = $_POST['username'];
                $pwd = $_POST['password'];
            }
        ?>
    </div>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Room Booker Login</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			     <form action="loginconnect.php" method="POST" id="sign">
			         <div class="container">
                         <input class="text w3lpass" placeholder="Username" type="text" name="username" required>
                         <input class="text w3lpass" placeholder="Password" type="password" name="password" required>
                         <input type="submit" name="login" value="Login">
                     </div>
                      
                     <p class="registration.php">Not registered? <a href="registration.php"><u>Create an account</u></a></p>
                  
            
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
<title>Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="main-w3layouts wrapper">
<!-- Custom Theme files -->
<link href="bootstrapsignup.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="navbar.css">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
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
