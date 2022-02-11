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
  <a class="active" href="searchcars.php">Cars</a>
  <a href="reports.php">Reports</a>
  <a  href="complaints.php">Complaints</a>
</div>

<form name = "form1" id="form1" method="post" action="" onsubmit="return OnSubmitForm();">
<div class = "content "style=" font-size: 35px">

  <br>
  <label>Car detail:</label>
  <input type="text" id="cid" name="cid" ></input><br>

  <input type="radio" id="type" name="type" value="carid">
  <label>Search by Car id</label><br>

  <input type="radio" id="type" name="type" value="name">
  <label>Search by Car name</label><br>
  
  <input type="radio" id="type" name="type" value="model_year">
  <label>Search by Model Year</label><br>
  
  <input type="radio" id="type" name="type" value="brand">
  <label>Search by car Manufacturer</label><br>
  
  <input type="radio" id="type" name="type" value="color">
  <label>Search by Car color</label><br>
  
  <input type="radio" id="type" name="type" value="capacity">
  <label>Search by Engine capacity</label><br>
  
  <input type="radio" id="type" name="type" value="plate_number">
  <label>Search by Car Plate number</label><br>
  
  <input type="radio" id="type" name="type" value="rate">
  <label>Search by rate</label><br>

  <input type="radio" id="type" name="type" value="status">
  <label>Search by status</label><br>

  <input type="radio" id="type" name="type" value="reserved">
  <label>Search by reserved</label><br>

  <input type="radio" id="type" name="type" value="officeid">
  <label>Search by office ID</label><br>

  <input type="radio" id="type" name="type" value="type">
  <label>Search by type</label><br>


<br>

<button type="submit" form="form1" value="Submit">Submit</button>
  </form>

  <script type="text/javascript">

function OnSubmitForm()
{
  
    document.form1.action ="carSearch.php";
   
  return true;
}
</script>



</div>
<br></br>




  </body>
</html>