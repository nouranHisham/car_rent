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
<div class="container">
<form name = "form1" id="form1" method="post" action="" onsubmit="return OnSubmitForm();">
<ul class="donate-now">
  <li>
    <input type="radio" id="revenue" name="report" value="revenue" checked/>
    <label for="revenue">Revenues</label>
  </li>
  <li>
    <input type="radio" id="reserved" name="report" value="reserved" />
    <label for="reserved"><a href="customerReport.php">Reserved Cars</a></label>
  </li>
  <li>
    <input type="radio" id="" name="report"  />
    <label ><a href="carReport.php">Cars Reservations</a></label>
  </li>
  <li>
    <input type="radio" id="" name="report" />
    <label ><a href="dailyReport.php">Daily Payment</a></label>
  </li>
  <li>
    <input type="radio" id="status" name="report" />
    <label ><a href="carStatus.php">Car status</a></label>
  </li>
 
</ul>
</div>
<br>
<br>

  <label for="startdate">Start Date:</label>
  <input type="date" id="startdate" name="startdate"></input>
  <br>
  <label for="enddate">End Date:</label>
  <input type="date" id="enddate" name="enddate"></input><br>

  <button type="submit" form="form1" value="Submit">Submit</button>
  </form>

  <script type="text/javascript">

function OnSubmitForm()
{
  if(document.form1.report[0].checked == true)
  { 
    document.form1.action ="revenue.php";
   
  }
  
  return true;
}
</script>



</div>
</div>

<br></br>

<div class="footer">
  <p>Footer</p>
</div>



  </body>
</html>