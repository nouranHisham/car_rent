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
				
			<br>
			Please Enter the admin information that you want to register
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
				<input class="input100" type="tel" name="phone" id="phone" pattern="^\d{10}$" placeholder="Phone Number">
				<span class="focus-input100" required="required" data-placeholder="&#xe80f;"></span>
			</div>
			<div class="wrap-input100 validate-input" >
				<input class="input100" type="number" name="ssn" id="ssn" placeholder="Social Security Number">
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
	        <br>
            Do you want to go back to the main menu <a href="Admin.php">Yes</a> 
	     

	           
	    </form>
	    </div>	    
	    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		 <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
			<script src="vendor/animsition/js/animsition.min.js"></script>
			<script src="vendor/bootstrap/js/popper.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
			<script src="vendor/select2/select2.min.js"></script>
			<script src="vendor/daterangepicker/moment.min.js"></script>
			<script src="vendor/daterangepicker/daterangepicker.js"></script>
			<script src="vendor/countdowntime/countdowntime.js"></script>
			<script src="js/main.js"></script>
  	    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  	    <script type="text/javascript">
  	    	function checkPassword(pass){
  	    		var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
				if(pass.match(passw)){ 
				return true;
				}
				else{ 
				alert('Wrong Password format please enter a password between 6 to 20 letters Containing lower and upper case letters and numbers ');
				return false;	
  	    		}
  	    	}

  	    	function validateEmail(email){
  	    		var validate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  	    		if(email.match(validate)){
  	    			return true;
  	    		}else{
  	    			alert('Wrong Email format');
  	    			return false;
  	    		}

  	    	}


  	    	function validate(){
  	    		var fname =$('#Fname').val(); 
  	    		var name =$('#Uname').val();
				var pass =$('#Pass').val();
				var email=$('#email').val();
				var cpass=$('#CPass').val();
				var phone=$('#phone').val();
				var ssn =$('#ssn').val();


				event.preventDefault();

				if(name.length==0){
					alert('Enter Your Username');
					return false;
				}else
				if(email.length==0){
					alert('Enter your email');
					return false;
				}else if(!validateEmail(email)){
					return false;
				}
				if(pass.length==0){
					alert('Enter your password');
					return false;
				}else if(!checkPassword(pass)){
					return false;
				}
				else if(fname.length==0){
					alert('Enter your name');
					return false;
				}
				else if(phone.length==0){
					alert('Enter your Phone Number');
					return false;
				}
				else if(ssn.length==0){
					alert('Enter your Social Security Number');
					return false;
				}
				if((cpass.length==0) || (pass != cpass)){
					alert('Please Confirm your password');
					return false;
				}

				$.ajax({
						method: 'POST',
					    url: 'InputAdmin.php',
					    dataType: 'json',
					    data:{
					    	name:name,
					    	password:pass,
					    	email:email,
					    	fname:fname,
					    	phone:phone,
					    	ssn:ssn,
					    },
					    timeout: 600,
					    success: function(data){
					        if(data.status == "ok"){
					        	var queryString = "?name=" + name ;
			                    location.href = "AdminSuccess.php" + queryString; 
						
							}else if (data.status == "found"){
								alert("Email Already registered try logging in");
							}else{
								alert("ERROR 404 NOT FOUND ");
							}
						},
					     error: function(XMLHttpRequest, textStatus, errorThrown) { 
						        alert("Status: " + textStatus); 
						        alert("Error: " + errorThrown); 
						}
					    
					});	

		

  	    	}
  	    
  	    	let btn = document.getElementById("ok");
		    btn.addEventListener('click', event => {
		      validate();
		    });


  	    </script>


	</body>

</html>