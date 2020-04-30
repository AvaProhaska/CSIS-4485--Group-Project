<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h2 style = 'color:brown'><center>Registered Vehicles<center></h2>

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
<th>Vehicle Year</th>
<th>Vehicle Make</th>
<th>Vehicle Model</th>
<th>Vehicle Type</th>
</tr>";

echo "<tr>";
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






</body>
</html>