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
  <a  class="active" href="addcar.php">Add Car</a>
  <a href="addoffice.php">Add Office</a>
  <a href="customers.php">Customers</a>
  <a href="rentedcars.php">Rented Cars</a>
  <a href="searchcars.php">Cars</a>
  <a href="reports.php">Reports</a>
  <a href="complaints.php">Complaints</a>
</div>



<div class=" content">
	
<form action="InputCar.php" method="POST" enctype="multipart/form-data"onsubmit="return confirm('Are you sure you want to submit?');">
  <label for="Brand">Brand:</label><br>
  <input type="text" id="Brand" name="Brand"><br>

  <label for="Name">Name:</label><br>
  <input type="text" id="Name" name="Name"><br>

 

  <label for="ModelYear">Model Year</label><br>
  <input type="number" id="ModelYear" name="ModelYear"><br>

  <label for="plate">Plate Number:</label><br>
  <input type="text" id="plate" name="plate"><br>

  <label for="capacity">Engine Capacity:</label><br>
  <input type="number" id="capacity" name="capacity"><br>

  <label for="Color">Color:</label><br>
  <input type="text" id="color" name="color"><br>

  <label for="rate">Price Rate:</label><br>
  <input type="number" id="rate" name="rate"><br>

  <label for="officeid"> Office Id</label><br>
  <input type="number" id="officeid" name="officeid"><br>

  
  

  <label for="Type">Type:</label><br>

  <input type="radio" id="Sedan" name="Type" value="Sedan">
  <label for="Sedan">Sedan</label>

  <input type="radio" id="Hatchback"  name="Type" value="Hatchback">
  <label for="Hatchback">Hatchback</label>

  <input type="radio" id="SUV"  name="Type" value="SUV">
  <label for="Hatchback">SUV</label>

  <input type="radio" id="Cross"  name="Cross" value="CrossOver">
  <label for="Hatchback">Cross over</label>  

  <input type="radio" id="Sports"  name="Sports" value="Sports">
  <label for="Hatchback">Sports car</label>

  <input type="radio" id="Bus" name="Type" value="Bus">
  <label for="Bus">Bus</label>

  <input type="radio" id="Coupe" name="Type" value="Coupe">
  <label for="Coupe">Coupe</label><br>


  <label for="status">Status:</label><br>

  <input type="radio" id="Active" name="status" value="active">
  <label for="Active">Active</label>
  <input type="radio" id="out" name="status" value="out of service">
  <label for="out">Out Of Service:</label><br>

<br>
  <label for="out">Select Image:</label><br>
  <input type="file" name="fileToUpload" id="fileToUpload">  <br>

<br>
  <input type="submit" value="Submit">

</form>	     

	           
	    

</div>

<br></br>




  </body>
</html>