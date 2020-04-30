
<html>
<body>


<?php
include("connection.php");

session_start();
$ret = $_SESSION['row'];
$userID = $ret['User_ID'];

$uname = $_POST["username"];
$passwd = $_POST["password"];
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];


$sql = "UPDATE user_t SET User_FirstName = '$fname', User_LastName = '$lname', User_Email = '$email', Username = '$uname', Password = '$passwd', User_Phone = '$phone' WHERE User_ID = '$userID'";



$_SESSION['User_FirstName'] = $fname;
$_SESSION['User_LastName'] = $lname;
$_SESSION['Username'] = $uname;
$_SESSION['Password'] = $passwd;
$_SESSION['User_Email'] = $email;
$_SESSION['User_Phone'] = $phone;
$_SESSION['User_Phone'] = $phone;


if ($conn->query($sql) === TRUE) {
echo "Account info has been updated!";
 header("location: home.html");
}
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>




</body>
</html>


