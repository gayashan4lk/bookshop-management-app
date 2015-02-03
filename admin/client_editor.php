<?php
session_start();
if(!isset($_SESSION["adminuser"])) {
header("Location:admin.php");
exit;
}
require_once("../dbcon.php");
$mess = "";
if(isset($_POST["submit"])) {
    $cid = $_GET["userid"];
    $f_name = $_POST["first_name"];
    $l_name = $_POST["last_name"];
    $cl_city = $_POST["city"];
    $cl_country = $_POST["country"];
    $cl_email = $_POST["email"];
    if(isset($_POST["email_notification"])) {
        $email_notification = "Y";
    } else {
        $email_notification = "N";
    }

    $user_name = $_POST["user_name"];
    $query2 = "UPDATE user_info SET first_name='".$f_name."', last_name='".$l_name."',
     city='".$cl_city."',  country='".$cl_country."',  
     email='".$cl_email."' , email_notify='".$email_notification."'  WHERE id = '$cid'";
    //echo $query2;
    $result2 = mysql_query($query2);
    if(!$result2) {
        $err=mysql_error();
        print $err;
        exit();
    }
    echo "<font color='blue'><b>Information has been entered.</b></font>";
    echo "<br>";
    echo "<a href='./clients.php'>back</a>";
    exit;
}
?>

<html>
<head>
<title>Edit User information</title>
<script type="text/javascript">
function test_form2() {
if(document.user.first_name.value=='') {
alert("Please enter your first name");
return false;
}
if(document.user.id.value=='') {
alert("Please enter your id number");
return false;
}
if(document.user.email.value=='') {
alert("Please enter your email address");
return false;
}
return confirm("Do you want to update?");
}
</script>
</head>

<body>
<?php
echo $mess;
?>
<?php
if(isset($_GET["userid"])) {
$query="SELECT id, first_name, last_name, city, country, email, email_notify
      FROM user_info 
      WHERE id = '".$_GET['userid']."'";
$result=mysql_query($query);
if(!$result) {
print mysql_error();
exit();
}
while($row=mysql_fetch_array($result)) {
    $id = $row["id"];
    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $id = $row["id"];
    $city = $row["city"];
    $country = $row["country"];
    $email_address = $row["email"];
    $email_notification = $row["email_notify"];
}
?>

<center>
<form name="admin_edit" method="post" action="" onSubmit="return test_form2()">
<table width="40%" bgcolor="silver">
<caption><font size="5"><b>Edit User Information</b></font></caption>
<br>
<tr>
<td>
<br><br>
<b>Id:</b><br>
<input type="text" name="id" size="10" maxlength="10" align="right" value="<?php echo $id; ?>"><br><br>
<b>First Name:</b><br>
<input type="text" name="first_name" size="50" maxlength="60" value="<?php echo $first_name; ?>"><br><br>
<b>Last Name:</b><br>
<input type="text" name="last_name" size="50" maxlength="60" value="<?php echo $last_name; ?>"><br><br>
<b>City:</b><br>
<input type="text" name="city" size="50" maxlength="60" value="<?php echo $city; ?>"><br><br>
<b>Country:</b><br>
<input type="text" name="country" size="50" maxlength="60" value="<?php echo $country; ?>"><br><br>



<b>E-Mail:</b><br>
<input type="text" name="email" size="50" maxlength="60" value="<?php echo $email_address; ?>"><br><br>
<b>Send E-Mail Notification:</b><br>
<input type="checkbox" name="email_notification" value="send" <?php if($email_notification == "Y") echo "CHECKED"; ?> ><br><br>
<input type="hidden" name="user_name" value="<?php //echo $username; ?>">
<div align=right>
<input type="submit" name="submit" value=" Submit ">
&nbsp;&nbsp;
<input type="reset" name="reset_s" value="Cancel">
</div>
</td>
</tr>
</table>
</center>
</form>
<?php
}
?>
</body>
</html>