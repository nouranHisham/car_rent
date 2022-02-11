<?php

include "connectDB.php";

$data = $_GET['car'];

$query = mysqli_query($conn, "SELECT * FROM `car` WHERE carID = $data");
 
$status = array();




while ($row = mysqli_fetch_assoc($query)) {
    
    $result[] = $row;
    $src = $result[0]['image'];


    if($result[0]['status'] == "active"){

        $paststatus = $result[0]['status'];
    
        $query2 = mysqli_query($conn, "UPDATE `car` SET `status`=\"out of service\" WHERE carid = $data");
        
       $status['status'] = "out of service";
    
}
    if($result[0]['status'] == "out of service"){

        $paststatus = $result[0]['status'];
    
        $query2 = mysqli_query($conn, "UPDATE `car` SET `status`=\"active\" WHERE carid = $data");

        $status['status'] = "active";
      
}
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
    <div class="header topnav" id="myHeader">
        <a href="home.php">Home</a>
        <a href="addcar.php">Add Car</a>
        <a href="addoffice.php">Add Office</a>
        <a href="customers.php">Customers</a>
        <a href="rentedcars.php">Rented Cars</a>
        <a href="searchcars.php">Cars</a>
        <a href="reports.php">Reports</a>
        <a href="complaints.php">Complaints</a>
    </div>

    <br>
    <div class="container">
        <div class="row">
            <div class="column2">
                <div>
                    <img src="<?php echo $src ?>" style="width:100%">
                </div>
            </div>
            
            <div class="column2">
                <div>
                    <div style=" font-size: 36px;">
                        <?php echo $result[0]['model_year'];
                        echo " ";
                        echo $result[0]['brand'];
                        echo " ";
                        echo $result[0]['name']; ?>                        
                    </div>
                    <div style=" font-size: 32px;">
                        A <?php echo $result[0]['color']; echo " "; echo $result[0]['type']?>
                    </div>
                    <div style=" font-size: 32px;">
                        Powered by a  <?php echo $result[0]['capacity']; echo " cc engine "?>
                    </div>
                    <div style=" font-size: 32px;">
                        For only <?php echo $result[0]['rate']; echo " $ per day "?>
                    </div>
                    <div style=" font-size: 32px;">
                        Current car status: <?php echo $status['status'];?>
                    </div>
                    
                    <br>
                    <br>

                    <div class = "card" style=" font-size: 32px;">
                        <button ><a href="Home.php"> Back to Dash</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <br></br>

    <div class="footer">
        <p>Footer</p>
    </div>



</body>
</html>
