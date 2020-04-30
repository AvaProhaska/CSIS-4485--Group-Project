<html>
<body>
<?php

include("connection.php");

$uname = $_POST["username"];
$passwd = $_POST["password"];
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$sql = "INSERT INTO user_t (User_FirstName, User_LastName, User_Email, Username, Password, User_Phone) 
VALUES ('$fname', '$lname', '$email', '$uname', '$passwd', '$phone')";
if ($conn->query($sql) === TRUE) {
 echo "Signed up successfully!";
 header("location: index.html");
}
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>






