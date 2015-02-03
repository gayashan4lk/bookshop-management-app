<?php
session_start();
if(!isset($_SESSION["adminuser"])) {
header("Location:admin.php");
exit;
}
$mess = "";
include("../dbcon.php"); //database connection function

if(isset($_GET["userid"]) && $_GET["action"]=="delete") {
    /*Connect to MySQL database*/
    $queryd = "DELETE FROM user_info WHERE id = '".$_GET["userid"]."' and usertype='C'";
    $result=$db->db_query($queryd,'query');
    $mess = "<font color='blue'><b>Information has been deleted.</b></font>";
    header("Location:clients.php");
	exit();
}

// Get user details 
$query2 = "SELECT id,first_name,middle_name,last_name,city,country,email,email_notify FROM user_info WHERE usertype = 'C'";
$result=$db->db_query($query2,"array");
?>
<html>
<head>
<!-- head section -->
<script type="text/javascript">
function delete_test() {
return confirm("Do you want to delete these information");
}
</script>
</head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- Title section -->
<title>Clients</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />


</head> 

<body bgcolor="green">
<?php
/* Output results as HTML table */
    echo "<table border=1 width='140%'>\n";
/* Output field names as table header */
echo "<caption><font >User Information</font></caption>
<tr>
<th width='10%'>Id</th>
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

</tr>";

if(count($result)>0){
/* Output all records */
for($i=0; $i<count($result); $i++) {
    
echo "<tr>
<td width='10%'>".$result[$i]['id']."</td>
<td width='20%'>".$result[$i]['first_name']."</td>
<td width='10%'>".$result[$i]['middle_name']."</td>
<td width='10%'>".$result[$i]['last_name']."</td>
<td width='10%'>".$result[$i]['last_name']."Job Title</td>
<td width='20%'>".$result[$i]['last_name']."</td>
<td width='10%'>".$result[$i]['last_name']."</td>
<td width='20%'>".$result[$i]['city']."</td>
<td width='20%'>Zipcode</td>
<td width='20%'>".$result[$i]['country']."</td>
<td width='20%'>Implementation Deadline</td>
<td width='20%'>Telephone</th><th width='20%'>Country</td>
<td width='20%'>Extention</td>
<td width='20%'>Fax</td>
<td width='20%'>".$result[$i]['email']."</td>
<td width='20%'>".$result[$i]['email_notify']."</td>
";
echo "<td width='5%' align='center'><a href='client_editor.php?userid=".$result[$i]['id']."'>Edit</a></td>";
echo "<td width='5%' align='center'><a onClick='return delete_test()' href='?userid=".$result[$i]['id']."&action=delete'>Delete</a></td>";
echo "</tr>";
}

}else{
    echo "<tr><td colspan='17'>No records found</td></tr>";
}
echo "</table>\n";
echo "<a href='ahome.php'>back to home</a>";

?>
</body>
</html>