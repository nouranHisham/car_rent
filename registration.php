<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="registrationStyle.css">
		<title>Registration</title>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	</head>
		<div>
		<div class="bg" style="background-image: url('background.jpg');">
			<div>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
				<h2>
					Welcome to CARS 'R' OURS</h2>
			<h2>Please Enter your sign up information</h2>
            <body>
	        <form method="POST" id="LogIn" 	> 
	        <div>
   				<input type="text" name="Fname" id="Fname" placeholder="Full Name">
				<span data-placeholder="&#xe82a;"></span>
			</div> 
	        <div>
   				<input type="text" name="Uname" id="Uname" placeholder="User name">
				<span data-placeholder="&#xe82a;"></span>
			</div>
			<div>
   				<input type="text" name="email" id="email" placeholder="Email">
				<span data-placeholder="&#xe82a;"></span>
			</div>
			<div>
				<input type="password" name="Pass" id="Pass" placeholder="Password">
				<span data-placeholder="&#xe80f;"></span>
			</div>
			<div>
				<input type="password" name="CPass" id="CPass" placeholder="Confirm Password">
				<span data-placeholder="&#xe80f;"></span>
			</div>
			<div >
				<input type="text" name="address" id="address" placeholder="Address">
				<span data-placeholder="&#xe80f;"></span>
			</div>
			<div>
				<input type="tel" name="phone" id="phone" pattern="^\d{10}$" placeholder="Phone Number">
				<span required="required" data-placeholder="&#xe80f;"></span>
			</div>
			<div>
				<input type="number" name="ssn" id="ssn" placeholder="Social Security Number">
				<span required="required" data-placeholder="&#xe80f;"></span>
			</div>
			<div>
				<input type="number" name="lnum" id="lnum" placeholder="License Number">
				<span required="required" data-placeholder="&#xe80f;"></span>
			</div>
				<span data-placeholder="&#xe80f;"></span>
			<div>
				<button id="ok">
							Signup
				</button>
			</div>     
			<br><br>   
	       <h4>Already have an account?</h4> <a href="index.php">Log In</a> 
	     

	           
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
				var lnum=$('#lnum').val();
				var address=$('#address').val();

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
				else if(lnum.length==0){
					alert('Enter your License Number');
					return false;
				}
				else if(address.length==0){
					alert('Enter your Address');
					return false;
				}
				if((cpass.length==0) || (pass != cpass)){
					alert('Please Confirm your password');
					return false;
				}

				$.ajax({
						method: 'POST',
					    url: 'InputCustomer.php',
					    dataType: 'json',
					    data:{
					    	name:name,
					    	password:pass,
					    	email:email,
					    	fname:fname,
					    	phone:phone,
					    	ssn:ssn,
					    	lnum:lnum,
					    	address:address,
					    },
					    timeout: 600,
					    success: function(data){
					        if(data.status == "ok"){
					        	var queryString = "?name=" + name ;
			                    location.href = "customerwelcome.php" + queryString; 
						
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