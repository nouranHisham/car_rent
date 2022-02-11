<?php
include "connectDB.php";


$cname = $_POST['type'];
$name = $_POST['cid'];
$query = mysqli_query($conn,"SELECT * FROM `rental` 
     WHERE $cname = '$name' or $cname Like '%$name%' ");
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
  <a class="active" href="rentedcars.php">Rented Cars</a>
  <a href="searchcars.php">Cars</a>
  <a href="reports.php">Reports</a>
  <a href="complaints.php">Complaints</a>
</div>


<div class= "content "style=" font-size:35px">

<br>
<div class="container" style="padding: 5%; overflow: auto;">
                                <form action="" method="post" class="row">
                                    <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <tr>


                                            <td style="font-size:1.1em; text-align:center;"> Rent ID</td>     
                                            <td style="font-size:1.1em;text-align:center;"> Car ID </td>
                                            <td style="font-size:1.1em;text-align:center;"> Customer ID </td>
                                            <td style="font-size:1.1em;text-align:center;"> Rent Date </td>
                                            <td style="font-size:1.1em;text-align:center;"> Office ID </td>
                                            <td style="font-size:1.1em;text-align:center;"> Pick Up date </td>
                                            <td style="font-size:1.1em;text-align:center;"> Return Date </td>
                                            <td style="font-size:1.1em;text-align:center;"> Payment </td>
                                            


                                        </tr>

                                      <?php

                            $count = 0;
                            

                            foreach($query as $row){
                             $count++;
                             ;
                            ?>
                            

                            <tr style="overflow: auto; font-size:0.8em; border-bottom: 1px black dashed; text-align: center; color: black;">
                 
                 <td style="background-color:White;"><?php echo $row["rentid"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["carid"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["cid"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["rentdate"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["officeid"]; ?></td>
                 
                 <td style="background-color:White;"><?php echo $row["pickupdate"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["returndate"]; ?></td>
                 <td style="background-color:White;"><?php echo $row["payment"]; ?></td>






             </tr>

                            <?php
                            }
                            ?>
                            </table>
                          </form>


<br></br>

  </body>
</html>