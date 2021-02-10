
 
<?php 
session_start(); 
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);   
?> 
<html> 
	<head> 
		<title>Login Page</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head> 
	<body> 
		<div class="limiter">
			<h2><b><?php 
			if($_SESSION['username'])
			echo $_SESSION['login_credentials']?></b></h2>
		<div class="container-login100">
			<div class="row">
				<div class="col" style="border-right: 5px solid white;">
				  	<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" name="myloginForm" method="post" action="login_check.php">
					<span class="login100-form-title p-b-43">
						Student's Login
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" name="studentlogin" type="text" placeholder="UserName" id="login">
						<span class="label-input100">UserName</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" name="studentpassword" type="password" placeholder="Password">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn" value="Login" />
					</div>
					
					<div class="text-center w-full p-t-23">
					</div>
				</form>
			</div>
				</div>
				<div class="col">
				  	<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" name="myloginForm" method="post" action="login_check.php">
					<span class="login100-form-title p-b-43">
						Teacher's Login
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" name="teacherlogin" type="text" placeholder="UserName" id="login">
						<span class="label-input100">UserName</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" name="teacherpassword" type="password" placeholder="Password">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn" value="Login" />
					</div>
					
					<div class="text-center w-full p-t-23">
					</div>
				</form>
			</div>
				</div>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	</body> 
</html>

