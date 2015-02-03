<?php
session_start();
if(!isset($_SESSION["username"])) {
header("Location:../error.html");
exit;
}
$mess = "";
if(isset($_GET["userid"])) {
/*Connect to MySQL database*/
include("../dbcon/form.php");
require_once("../dbcon/dbcon.php");
$user_name=$_GET["uname_d"];
$query2 = "DELETE FROM user_infoWHERE user_name = '$user_name'";
$result2 = mysql_query($query2);
if(!$result2) {
$err=mysql_error();
print $err;
exit();
}
$mess = "<font color='blue'><b>Information has been deleted.</b></font>";
}
?>

<html> <head>
<title>View User Information</title>
<script type="text/javascript">
function delete_test() {
return confirm("Do you want to delete these information");
}
</script>
</head> <body>
<h2>View of User Information</h2>
<?php
echo "$mess<br>";
?>
<?php
/*Connect to MySQL database*/
include("../dbcon/form.php");
require_once("../dbcon/dbcon.php");
/*Execute SQL command*/
$query = "id , first_name  , middle_name’ ,  last_name  , job_title , 
 company’ ,  company_address, city , zipcode , country ,  industry , 
 implementation_deadline ,  telephone ,  extension , fax, email ,  notification ,  
username ,  FROM
user_info";
$result=mysql_query($query);
/* Output results as HTML table */
echo "<table border=1 width=140%>\n";
/* Output field names as table header */
echo "<caption><font >User Information</font></caption>
<tr>
<th width='20%'>Id</th>
<th width='20%'>First Name</th>
<th width='10%'>Middle Name</th>
<th width='10%'>Last Name</th>
<th width='10%'>Job Title</th>
<th width='20%'>Company</th>
<th width='10%'>Company Address</th>
<th width='20%'>City</th>
<th width='20%'>Zipcode</th>
<th width='20%'>Country</th>
<th width='20%'>Industry</th>
<th width='20%'>Implementation Deadline</th>
<th width='20%'>Telephone</th>
<th width='20%'>Extention</th>
<th width='20%'>Fax</th>
<th width='20%'>Email</th>
<th width='20%'>Notification</th>

</tr>“;

/* Output all records */
while($myrow=mysql_fetch_row($result)) {
echo "<tr>";
for($f=0;$f<mysql_num_fields($result)-1;$f++) {
echo "<td>&nbsp;".htmlspecialchars($myrow[$f]);
}
echo "<td width='5%' align='center'><a href='./edit_user_info.php?username=".urlencode($myrow[7])."'>edit</a>";
echo "<td width='5%' align='center'><a onClick='return delete_test()' href='?username_d=".urlencode($myrow[7
])."'>delete</a>";
}
echo "</table>\n";
echo "<a href='../form.php'>back to home</a>";
?>
</body>
</html>