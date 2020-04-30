<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h2>Scheduled Details</h2>

<?php

include("admin_index.html");

include("connection.php");



$sql="SELECT * FROM service_t ";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result))
{
echo "<table  class = 'table table-striped table-hover table-bordered'>
<tr>
<th>Service ID</th>
<th>User ID</th>
<th>Vehicle ID</th>
<th>Service Type</th>
<th>Additional Service</th>
<th>Date</th>
<th>Time</th>

</tr>";

echo "<tr>";
echo "<td>" . $row['Service_ID'] . "</td>";
echo "<td>" . $row['User_ID'] . "</td>";
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









