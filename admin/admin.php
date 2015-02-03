<?php
session_start();
if(isset($_SESSION["adminuser"])) {
header("Location: ahome.php");
}

$mess="";
if(isset($_POST["submit"]) && $_POST["submit"]=="Sign in") {
//conncet to the database
//require_once("../admin/ahome.php");
include("../dbcon.php"); //database connection function

$user=$_POST["username"];
$password=md5($_POST["password"]);
//retrieving data from db
$query = "SELECT username FROM user_info WHERE username = '$user' AND password = '$password' and usertype='A'";
$result=$db->db_query($query,"array");

if(count($result)==0) {
$mess = "<font color=purple size=2><b>Wrong username or password.</font>";
} else {
$_SESSION["adminuser"]=$result[0]['username'];
header("Location: ahome.php");
exit;
}
}
?>

<html>
<head>
<title>index page</title>
</head>
<body>
    <div style="padding-top: 150px">
    <center>
    <div style="border: 1px solid #ccc; width:300px; background-color: white">
    <!-- start of admin loging part -->
    <form name="signin" method="post" action="" >
    <h2>Admin Login</h2>
    <table height="80px">
    <tr><td>User Name:
    <td><input type="text" name="username" value="" >
    <tr><td>Password:
    <td><input type="password" name="password" value="">
    </table>
    <input type="submit" name="submit" value="Sign in">
    </form>
    <?php
    echo $mess."<br><br>";
    ?>
    <!-- end of loging part -->
    </div>
    </center>
    </div>
</body>
</html>