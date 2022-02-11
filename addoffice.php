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
  <a  class="active" href="addoffice.php">Add Office</a>
  <a href="customers.php">Customers</a>
  <a href="rentedcars.php">Rented Cars</a>
  <a href="searchcars.php">Cars</a>
  <a href="reports.php">Reports</a>
  <a href="complaints.php">Complaints</a>
</div>


<div class = "content ">

<form action="inputoffice.php" method="post" onsubmit="return confirm('Are you sure you want to submit?');">
  <label for="country">Country:</label><br>
  <input type="text" id="country" name="country"><br>

  <label for="city">City:</label><br>
  <input type="text" id="city" name="city"><br>

  
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address"><br>
 


  
  







  <input type="submit" value="Submit">

</form>	     
</div>

<br></br>

<div class="footer">
  <p>Footer</p>
</div>



  </body>
</html>