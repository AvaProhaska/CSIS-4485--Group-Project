<?php
include("connection.php");

if (isset($_GET['deleteid'])){
 $deleteid = $_GET['deleteid'];
 $sql = "DELETE FROM user_t WHERE User_ID = $deleteid"; 
 mysqli_query($conn, $sql);
header("Location: user_accounts.php");
}


?>