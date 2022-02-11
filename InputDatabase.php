<?php
    include "config.php";
    $uname = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

	$data = array();
	$hashed_password = md5($password);

	$sql_query = "select count(*) as cntUser from user where email='".$email."'";
    $result = mysqli_query($con,$sql_query);
   	$row = mysqli_fetch_array($result);

   	$count = $row['cntUser'];

   	if($count > 0){
	    $data['status'] = 'found';
	}else{
	                             
		$sql_1 = "INSERT INTO user (email, name, password) VALUES ('".$email."', '".$uname."', '".$hashed_password."')"; 

		if(mysqli_query($con, $sql_1)){ 
			$data['status'] = 'ok';
	 	}
 	}

 	echo json_encode($data);
 	mysqli_close($con);

?>