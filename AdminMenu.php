<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Registration</title>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	</head>
	<body>
		<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Welcome to Cars 'R' Ours
			<br>
			Please Enter your information
		</span>
	        <form class="login100-form validate-form p-b-33 p-t-5"  method="POST" id="LogIn" 	> 
	        <div class="wrap-input100 validate-input" >
   				<input class="input100" type="text" name="Fname" id="Fname" placeholder="Full Name">
				<span class="focus-input100" data-placeholder="&#xe82a;"></span>
			</div> 
	        <div class="wrap-input100 validate-input" >
   				<input class="input100" type="text" name="Uname" id="Uname" placeholder="User name">
				<span class="focus-input100" data-placeholder="&#xe82a;"></span>
			</div>
			<div class="wrap-input100 validate-input" >
   				<input class="input100" type="text" name="email" id="email" placeholder="Email">
				<span class="focus-input100" data-placeholder="&#xe82a;"></span>
			</div>
			<div class="wrap-input100 validate-input" >
				<input class="input100" type="password" name="Pass" id="Pass" placeholder="Password">
				<span class="focus-input100" data-placeholder="&#xe80f;"></span>
			</div>
			<div class="wrap-input100 validate-input" >
				<input class="input100" type="password" name="CPass" id="CPass" placeholder="Confirm Password">
				<span class="focus-input100" data-placeholder="&#xe80f;"></span>
			</div>
			<div class="wrap-input100 validate-input" >
				<input class="input100" type="text" name="address" id="address" placeholder="Address">
				<span class="focus-input100" data-placeholder="&#xe80f;"></span>
			</div>
			<div class="wrap-input100 validate-input" >
				<input class="input100" type="tel" name="phone" id="phone" pattern="^\d{10}$" placeholder="Phone Number">
				<span class="focus-input100" required="required" data-placeholder="&#xe80f;"></span>
			</div>
			<div class="wrap-input100 validate-input" >
				<input class="input100" type="number" name="ssn" id="ssn" placeholder="Social Security Number">
				<span class="focus-input100" required="required" data-placeholder="&#xe80f;"></span>
			</div>
			<div class="wrap-input100 validate-input" >
				<input class="input100" type="number" name="lnum" id="lnum" placeholder="License Number">
				<span class="focus-input100" required="required" data-placeholder="&#xe80f;"></span>
			</div>
				<span class="focus-input100" data-placeholder="&#xe80f;"></span>
			<div class="container-login100-form-btn m-t-32">
				<button class="login100-form-btn" id="ok">
							Login
				</button>
			</div>     
			<br><br>   
	        Already have an account <a href="index.php">Log In</a> 
	     

	           
	    </form>
	    </div>	    
	    
	</body>

</html>