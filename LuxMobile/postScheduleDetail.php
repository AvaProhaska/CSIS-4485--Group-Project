<?php
include("connection.php");

session_start();
$ret = $_SESSION['row'];
$userID = $ret['User_ID'];

$vehicleID = $_POST["vehicle_id"];
$serviceType = $_POST["stage"];
$additionalService = $_POST["Additional_service"];
$date = $_POST["date"];
$time = $_POST["time"];


$sql = "INSERT INTO service_t (User_ID, Vehicle_ID, Service_Type, Additional_Service, Date, Time) 
VALUES ('$userID', '$vehicleID', '$serviceType', '$additionalService', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
 echo "Detail scheduled successfully!";
 header("location: home.html");
}
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>




