<!DOCTYPE html>
<html>
<head>

</head>
<body>
<ul>
  <li><a href="./login.php">Login</a></li>
  <li><a href="./registration.php">SignUp</a></li>
</ul>
    <div>
        <?php
            if(isset($_POST['create'])){
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
            }
        ?>
    </div>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Room Booker SignUp</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			     <form action="signupdb.php" method="POST">
                    <div class="container">
                        <h1>Registration</h1>
                        <p>Fill out form</p>
                        <input class="text w3lpass" placeholder="First Name" type="text" name="firstname" required>
                        
                        <input class="text w3lpass" placeholder="Last Name" type="text" name="lastname" required>
                        
                        <input class="text w3lpass" placeholder="Username" type="text" name="username" required>
                        
                        <input class="text w3lpass" placeholder="Email" type="email" name="email" required>
                        
                        <input class="text w3lpass" placeholder="Password" type="password" name="password" required>
                        
                        <input type="submit" name="submit" value="Sign Up">
                    </div>
                </form>
				
				<p>Already have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© Team Orange</p>
		</div>
		<!-- //copyright -->
		
	</div>
	<!-- //main -->
</body>
<title>Team Orange Signup Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<!-- //web font -->
</html>