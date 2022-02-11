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
  <a  href="complaints.php">Complaints</a>
</div>

<form name = "form1" id="form1" method="post" action="" onsubmit="return OnSubmitForm();">
<div class = "content "style=" font-size: 35px">

  <br>
  <label>Rent detail:</label>
  <input type="text" id="cid" name="cid" ></input><br>

  <input type="radio" id="type" name="type" value="rentid">
  <label>Search by Rent id</label><br>
  
  <input type="radio" id="type" name="type" value="carid">
  <label>Search by Car id</label><br>

  <input type="radio" id="type" name="type" value="cid">
  <label>Search by Customer id</label><br>
  
  <input type="radio" id="type" name="type" value="rentdate">
  <label>Search by Rent date</label><br>
  
  <input type="radio" id="type" name="type" value="officeid">
  <label>Search by office ID</label><br>
  
  
  

<br>

<button type="submit" form="form1" value="Submit">Submit</button>
  </form>

  <script type="text/javascript">

function OnSubmitForm()
{
  
    document.form1.action ="searchReservations.php";
   
  return true;
}
</script>



</div>
<br></br>




  </body>
</html>