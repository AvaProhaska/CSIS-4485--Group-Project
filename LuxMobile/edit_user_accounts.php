
<html class="no-js" lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>


<table class = "table table-bordered table-hover">
  <td>
        <div class="container">
          <form id = 'form1' name = "form1" method = "post" enctype = "multipart/form-data" action = "user_accounts.php">
          <table class = "table table-striped table-hover table-bordered">
              <div class="form-group">          
				<tr>
					<td colspan = "2"><div align = "center"><h2 style='color:maroon'>Edit user info</h2></div></td>
				</tr>          
			  </div> 	
			  
              <div class="form-group">			  	
				<tr>	
					<td colspan = "2">
	
					</td>
				</tr>
			 </div>					
			 
              <div class="form-group">              
                <tr>
              	   <td> <label><h4>First Name</h4></label> </td>
      	           <td> <input type="text" name="firstname" class="form-control" ></td>
                </tr>  
                
                <tr>
                    <td> <label><h4>Last Name</h4></label> </td>
                    <td> <input type="text" name="lastname" class="form-control" ></td>
               </tr> 

                <tr>
	 	            <td> <label><h4>Email</h4></label></td>
                    <td> <input type="email" name="email" class="form-control" ></td>
                </tr>  

                <tr>
                    <td> <label><h4>Phone</h4></label> </td>
                    <td> <input type="number" name="phone" class="form-control" ></td>
                </tr> 
              
                <tr>
                    <td> <label><h4>Username</h4></label> </td>
                    <td> <input type="text" name="username" class="form-control" ></td>
                </tr> 

                <tr>
	 	            <td> <label><h4>Password</h4></label></td>
                    <td> <input type="password" name="password" class="form-control" ></td>
                </tr>               

           

              	<tr>
	              <td colspan = "2"><button type="submit" class = "btn btn-outline-primary">Submit</button></td>
	              </tr>  
           </table>
          </form>
		</div>
  </td>
</table>
</body>
<html>

<?php
include 'user_accounts.php';
if (isset($_GET['editid'])){
    $editid = $_GET['editid'];
}

$username = $_POST["username"];
$password = $_POST["password"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];


$sql = "UPDATE user_t SET User_FirstName = '$firstname', User_LastName = '$lastname', User_Email = '$email', Username = '$username', Password = '$password', User_Phone = '$phone' WHERE User_ID = '$editid'";

$conn = mysqli_connect("localhost","lux", "lux","luxdb");
if ($conn->query($sql) === TRUE) {
 header("location: user_accounts.php");
}
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>




