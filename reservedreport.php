<?php
include "connectDB.php";


$cname = $_POST['type'];
$name = $_POST['cid'];
if($cname == "cid"){
	    $query = mysqli_query($conn,"SELECT * FROM `rental` as r Left JOIN car as c on c.carid = r.carid left join customer as cu on cu.cid = r.cid
     WHERE cu.cid = '$name' " );
	    $query2 = mysqli_query($conn,"SELECT name From car as c Right Join rental as r on c.carid = r.carid
    WHERE r.cid = '$name' ");
	  
 }else if($cname == "cname"){
 		$query = mysqli_query($conn, "SELECT * FROM `rental` as r left join customer as cu on cu.cid = r.cid left join car as ca on ca.carid = r.carid
		WHERE cu.name = '$name'  ");
		$query2 = mysqli_query($conn, "SELECT * FROM `rental` as r  left join car as ca on ca.carid = r.carid left join customer as cu on cu.cid = r.cid
		WHERE cu.name = '$name' ");




 }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="adminstyle.css">
    <script src="adminscript.js"></script>



    <title>Home</title>
  </head>
  <body>
  <div class="header topnav"  id="myHeader">
  <a  href="home.php">Home</a>
  <a href="addcar.php">Add Car</a>
  <a href="addoffice.php">Add Office</a>
  <a href="customers.php">Customers</a>
  <a href="rentedcars.php">Rented Cars</a>
  <a href="searchcars.php">Cars</a>
  <a  class="active" href="reports.php">Reports</a>
  <a href="complaints.php">Complaints</a>
</div>


<div class= "content "style=" font-size:35px">

<br>
<div class="container" style="padding: 5%; overflow: auto;">
                                <form action="" method="post" class="row">
                                    <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <tr>


                                            <td style="font-size:1.1em; text-align:center;"> Rent ID</td>
                                            <td style="font-size:1.1em; text-align:center;"> customer ID</td>
                                            
                                            <td style="font-size:1.1em; text-align:center;"> Rent Date </td>
                                            <td style="font-size:1.1em; text-align:center;"> Office ID </td>
                                            <td style="font-size:1.1em;text-align:center;"> Amount </td>
                                            <td style="font-size:1.1em;text-align:center;"> Car name </td>
                                            <td style="font-size:1.1em;text-align:center;"> Model Year </td>
                                            <td style="font-size:1.1em;text-align:center;"> Manufacturer </td>
                                           
                                            <td style="font-size:1.1em;text-align:center;"> Plate Number </td>
                                            
                                            <td style="font-size:1.1em;text-align:center;"> Customer Name </td>
                                            <td style="font-size:1.1em;text-align:center;"> Phone </td>
                                            <td style="font-size:1.1em;text-align:center;"> Email </td>
                                            <td style="font-size:1.1em;text-align:center;"> License Number </td>
                                            <td style="font-size:1.1em;text-align:center;"> SSN </td>


                                        </tr>

                                      <?php

                            $count = 0;
                            $totalrevenue=0;

                            foreach($query as $row){
                             $count++;
                             $totalrevenue += $row['payment'];
                             $row2 = mysqli_fetch_assoc($query2);
                            ?>
                            

                            <tr style="overflow: auto; font-size:0.8em; border-bottom: 1px black dashed; text-align: center; color: black;">
                 <td style="background-color:White;"><?php echo $row["rentid"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["cid"]; ?></td>
                 
                 <td style="background-color:White;"><?php echo $row["rentdate"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["officeid"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["payment"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["name"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["model_year"]; ?></td>
                 
                 <td style="background-color:White;"><?php echo $row["brand"]; ?></td>
                 
                 
                 <td style="background-color:White;"><?php echo $row["plate_number"]; ?></td>
                 
                 
                 <td style="background-color:White;"><?php echo $row2["name"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["phone"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["email"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["license_num"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["ssn"]; ?></td>
             </tr>

                            <?php
                            }
                            ?>
                            </table>
                            <span style="font-size:38"> Total revenue in that time period = <?php echo $totalrevenue?></span>
                          </form>


<br></br>

  </body>
</html>