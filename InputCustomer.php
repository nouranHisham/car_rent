
<?php
    include "config.php";
    $fname = $_POST['fname'];
    $uname = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address =$_POST['address'];
    $ssn = $_POST['ssn'];
    $lnum = $_POST['lnum'];
    $phone = $_POST['phone'];

	$data = array();
	$hashed_password = md5($password);

	$sql_query = "select count(*) as cntUser from customer where email='".$email."'";

    $result = mysqli_query($con,$sql_query);
   	$row = mysqli_fetch_array($result);

   	$count = $row['cntUser'];

   	if($count > 0){
	    $data['status'] = 'found';
	}else{
	                             
		$sql_1 = "INSERT INTO customer(name,address,email, phone, ssn, license_Num,username,password) VALUES ('".$fname."','".$address."','".$email."','".$phone."','".$ssn."','".$lnum."','".$uname."','".$hashed_password."')";
		if(mysqli_query($con, $sql_1)){ 
			$data['status'] = 'ok';
	 	}
 	}

 	echo json_encode($data);
 	mysqli_close($con);

?>