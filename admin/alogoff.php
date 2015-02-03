<?php
session_start();
if(isset($_SESSION["adminuser"])) {
unset($_SESSION["adminuser"]);
}
header("Location: admin.php");
exit;
?>
<html>
<head>
<title>Logged Off</title>
</head>
<body>
<br><br>
<div align="">
<h2>You are now logged off</h2>
&nbsp;&nbsp;&nbsp;
<a href="admin.php">Login here</a></div>
</body> 
</html>