<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h2 style = 'color:cyan'><center>Scheduled Details</center></h2>

<?php

include("connection.php");

session_start();
$ret = $_SESSION['row'];
$userID = $ret['User_ID'];

$result = mysqli_query($conn,"SELECT * FROM service_t where user_id = '$userID'");




while($row = mysqli_fetch_array($result))
{
echo "<table class = 'table table-striped table-hover table-bordered'>
<tr>
<th>Service ID</th>
<th>Vehicle ID</th>
<th>Service Type</th>
<th>Additional Service</th>
<th>Date</th>
<th>Time</th>

</tr>";

echo "<tr>";
echo "<td>" . $row['Service_ID'] . "</td>";
echo "<td>" . $row['Vehicle_ID'] . "</td>";
echo "<td>" . $row['Service_Type'] . "</td>";
echo "<td>" . $row['Additional_Service'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";
echo "<td>" . $row['Time'] . "</td>";
echo "</tr>";
echo "</table>";
echo "<br>";
}

$conn->close();
?>



</body>
</html>
