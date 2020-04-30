
<html>
<body>


<?php

include("connection.php");

session_start();
$ret = $_SESSION['row'];
$userID = $ret['User_ID'];

$year = $_POST["year"];
$make = $_POST["make"];
$model = $_POST["model"];
$type = $_POST["type"];


$sql = "INSERT INTO vehicle_t (User_ID, Vehicle_Year, Vehicle_Make, Vehicle_Model, Vehicle_Type) 
VALUES ('$userID', '$year', '$make', '$model', '$type')";

if ($conn->query($sql) === TRUE) {
echo "Vehicle registered successfully!";
 header("location: home.html");
}
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>



</body>
</html>










