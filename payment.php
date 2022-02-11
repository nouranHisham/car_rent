<?php

include "connectDB.php";

session_start();

$start = $_SESSION["start"];
echo $start;

$end = $_SESSION["end"];
echo $end;
$carid = $_SESSION["carid"];
echo $carid;
$totalpayment = $_SESSION["totalpayment"];
echo $totalpayment;

$officeid = $_SESSION["officeid"];
echo $officeid;

$customerid = $_SESSION["id"];

$paymenttype = $_POST["payment"];
echo $paymenttype;

$rentdate = new DateTime('today');
$rentdate = $rentdate->format('Y-m-d');
echo $rentdate;


$query = mysqli_query($conn, "INSERT INTO `rental`( `cid`, `carid`,  `officeid`, `rentdate`, `pickupdate`, `returndate`, `payment`) 
VALUES ('$customerid','$carid','$officeid','$rentdate','$start','$end','$totalpayment')");


if($paymenttype== "cash"){
$query2 = mysqli_query($conn, "INSERT INTO `payment`( `cid`, `carid`,  `amount`,`rentdate`, `payment_date`, `payment_status`, `payment_type`) 
VALUES ('$customerid','$carid','$totalpayment', '$rentdate','$start',0,'$paymenttype')");}
else{
    $query2 = mysqli_query($conn, "INSERT INTO `payment`( `cid`, `carid`,  `amount`, `rentdate` `payment_date`, `payment_status`, `payment_type`) 
VALUES ('$customerid','$carid','$totalpayment','$rentdate','$start',1,'$paymenttype')");}

if($query && $query2){echo "sucess";
    unset($_SESSION['start']);
    unset($_SESSION['end']);
    unset($_SESSION['carid']);
    unset($_SESSION['totalpayment']);
    unset($_SESSION['officeid']);

    header("Location:customerwelcome.php");
}
else {echo "error";}








?>
