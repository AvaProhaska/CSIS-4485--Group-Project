<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h2 style = 'color:orange'><center>Account info</center></h2>

<?php

$servername = "localhost";
$username = "lux";
$password = "lux";
$dbname = "luxdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

session_start();
$ret = $_SESSION['row'];
$userID = $ret['User_ID'];

$result = mysqli_query($conn,"SELECT * FROM user_t where user_id = '$userID'");


while($row = mysqli_fetch_array($result))
{

echo "<table class = 'table table-striped table-hover table-bordered'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone</th>
<th>Username</th>
<th>Password</th>

</tr>";

echo "<tr>";
echo "<td>" . $row['User_FirstName'] . "</td>";
echo "<td>" . $row['User_LastName'] . "</td>";
echo "<td>" . $row['User_Email'] . "</td>";
echo "<td>" . $row['User_Phone'] . "</td>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['Password'] . "</td>";

echo "</tr>";
echo "</table>";
echo "<br>";
}

$conn->close();
?>

</body>
</html>



