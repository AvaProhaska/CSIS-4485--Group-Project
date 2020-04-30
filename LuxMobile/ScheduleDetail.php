<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

<form action="postScheduleDetail.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<h2><center>Book Your Appointment</center></h2><br />

	<h4>Registered Vehicles:</h4>
	
	
<?php
include("connection.php");

session_start();
$ret = $_SESSION['row'];
$userID = $ret['User_ID'];

$result = mysqli_query($conn,"SELECT * FROM vehicle_t where user_id = '$userID'");




while($row = mysqli_fetch_array($result))
{
echo "<table class = 'table table-striped table-hover table-bordered'>
<tr>
<th>Vehicle ID</th>
<th>Vehicle Year</th>
<th>Vehicle Make</th>
<th>Vehicle Model</th>
<th>Vehicle Type</th>
</tr>";

echo "<tr>";
echo "<td>" . $row['Vehicle_ID'] . "</td>";
echo "<td>" . $row['Vehicle_Year'] . "</td>";
echo "<td>" . $row['Vehicle_Make'] . "</td>";
echo "<td>" . $row['Vehicle_Model'] . "</td>";
echo "<td>" . $row['Vehicle_Type'] . "</td>";
echo "</tr>";
echo "</table>";
echo "<br>";
}

$conn->close();
?>

	


	<table class = "table table-bordered table-hover">
  <td>
        <div class="container">
          <form id = 'form1' name = "form1" method = "post" enctype = "multipart/form-data" action = "register.php">
          <table class = "table table-striped table-hover table-bordered">
              	
			  
              <div class="form-group">			  	
				<tr>	
					<td colspan = "2">
						<?php
						error_reporting(0);
						echo $_GET['msg'];
						?>
					</td>
				</tr>
			 </div>					
			 
              <div class="form-group">              
                <tr>
              	   <td> <label><h4>1. Enter a Vehicle ID from your registered vehicles above:</h4></label> </td>
      	           <td> <input type="varchar" name="vehicle_id" class="form-control" ></td>
                </tr>  
			  
				<tr>
					<td> <label><h4>2. Select your Service:</h4></label> </td>
					<td>
					 <select class="form-control" name = "stage">
						 <option value="stage1">Stage 1</option>
						 <option value="stage2">Stage 2</option>
						 <option value="stage3">Stage 3</option>
					</select>
					</td>
			   </tr>  

                <tr>
	 	            <td> <label><h4>3. Additional Services:</h4></label></td>
					<td> <select name="Additional_service" class="form-control" >
						 <option value="None">None</option>
						 <option value="Paint_Correction">Paint Correction</option>
						 <option value="Ceramic_Coating">Ceramic Coating</option>
						 <option value="Both">Both</option>
					</select>
					</td>
				</tr>  
				
				<tr>
					<td> <label><h4>4. Book Your Appointment:</h4></label> </td>
					<td> <input type="date" name="date" class="form-control" ></td>
			   </tr> 
			  
	


			   <tr>
					<td> <label><h4>5. Select a Time:</h4></label> </td>
					<td> <select name="time" class="form-control" >
					<option>9am-11am</option>
					<option>11am-1pm</option>
					<option>1am-3pm</option>
					<option>3pm-5pm</option>
					</select>
					</td>
			   </tr> 

              	<tr>
	              <td colspan = "2"><button name="submit" type="submit" class = "btn btn-outline-primary">Submit</button></td>
	              </tr>  
           </table>
          </form>
		</div>
  </td>
</table>

</body>

</html>






