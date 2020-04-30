<html>
<body>
<?php
$servername = "localhost";
$username = "lux";
$password = "lux";
$dbname = "luxdb";
$myusername = $_POST["username"];
$mypassword= $_POST["password"];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user_t WHERE Username = '$myusername' and Password = '$mypassword'";
$result = $conn->query($sql);
if ($result->num_rows === 1) {
 session_start();
 $row = $result->fetch_assoc();
unset($_SESSION['row']);

if (!isset($_SESSION['row'])) {
 $_SESSION['row'] = $row;
 header("location: home.html");
}
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>