<?php
include "connectDB.php";

$city = $_POST['city'];
$country = $_POST['country'];
$address = $_POST['address'];

echo $city;
echo $country;
echo $address;


$query = mysqli_query($conn,"INSERT INTO `office`( `Country`, `City`, `Address`) VALUES ('$country','$city','$address')");

if($query) {echo "success";
header("Location:home.php")
;}
?>