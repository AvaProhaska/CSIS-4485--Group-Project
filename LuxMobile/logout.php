
<html>
<body>
Succesfully logged out.<br><br>
<a href="index.html">Click here</a> to log in.
<?php
session_start();
session_destroy();
exit;
?>
</body>
</html>
