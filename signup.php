<?php
$mess = ""; 
if(isset($_POST["submit"])) {
    echo 'assss';
//conncet to the database require_once("../dbcon/welcome.php");
include("dbcon.php");	//database connection function

$first_name=$_POST["first_name"];
$middle_name=$_POST["middle_name"];
$last_name=$_POST["last_name"];
$job_title=$_POST["job_title"];
$company=$_POST["company"];
$company_address=$_POST["company_address"];
$city=$_POST["city"];
$zipcode=$_POST["zip_code"];
$country=$_POST["country"];
$industry=$_POST["industry"];
$implementation_deadline=$_POST["imp_deadline"];
$telephone=$_POST["phone"];
$extension=$_POST["ext"];
$fax=$_POST["fax"];
$email=$_POST["email"];

//if(isset($_POST["email_notification"])) {
//$notification='Y';
//} else {
//}
$notification='N';
 
$username=$_POST["username"];
$password=md5($_POST["password"]);
$password_conf=md5($_POST["password_conf"]);

if($password!=$password_conf) {
$mess="<font color='red'>Password and confirmation doesn't match.</font>"; exit;
}
 
$query = "INSERT INTO user_info(first_name, middle_name, last_name, job_title, company, 
company_address, city, zip_code, country, industry, imp_deadline, phone , ext ,
 fax , email , email_notify , username , password ) VALUES
('$first_name' , '$middle_name' ,  '$last_name'  , '$job_title' , 
 '$company' ,  '$company_address', '$city' ,  '$zipcode' ,  '$country' ,  '$industry' , 
 '$implementation_deadline' ,  '$telephone' ,  '$extension' , '$fax', '$email' ,  '$notification'  ,  
'$username' ,   '$password' )";

echo $query;
$result = mysql_query($query);

 
if(!$result) {

$error = mysql_error(); print $error;
exit;
 }

$mess = "<font color='blue'>Successfully  Created Your Account!</font>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- head section -->
</head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- Title section -->
<title>Standard Publications Sri Lanka</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />

<style type="text/css" media="all"> 
<!--
@import url("styles.css");
-->
</style>

</head>
<body background=ap.jpg>
<div id="headerWrapper">
  <div id="header">
    <div id="logo"><a href="#"><img src="images/images3.jpg" alt="" width="220" height="117"></a></div>
    <div id="nav">
      
    </div>
    
  </div>
</div>

<div id="outerWrapper">
  <div id="contentWrapper">
    <div id="leftColumn1">
      <div id="leftColumnContent"> 
          <ul>
		<li><a href="index.php"><img src="images/home.jpg" alt="Home" width="110" /></a></li>
        <li><a href="inquiries.html"><img src="images/inquiries.jpg" alt="Inquiries" width="110" /></a></li>
        <li><a href="standards.html"><img src="images/standards.jpg" alt="Standards" width="110"  /></a></li>
       <li> <a href="contact.html"><img src="images/contact.jpg" alt="Contact us" width="110" /> </a></li>
        <li><a href="About.html"><img src="images/about.jpg" alt="About us" width="110" /> </a></li>
      </ul>
        <div class="sidebarbox">
          <div class="sidebarboxtop">
            <p><img src="images/index.jpg" alt="" width="180" height="130" >.</p>
            
          </div>
          <div class="sidebarboxbottom"></div>
        </div>     
        <img src="images/index2.jpg" alt="" width="180" height="120"/>,
        <img src="images/index3.jpg" alt="" width="180" height="130"/>,
        <img src="images/index4.jpg" alt="" width="180" height="130"/>, 
       <img src="images/index5.jpg" alt="" width="180" height="150"/>,
<img src="images/index6.jpg" alt="" width="180" height="160"/>, 	   
        
      </div>
      </div>
    <div id="content"> 


<p>
   <h1 align=right>Sign up <br><h2 align=right>with Standard Publications Sri Lanka</h2></h1><hr color=green>
   <h2>New User Registration</h2>

<p>
  
   <form name="form1" method="post" action="checklogin.php">
   First Name:<br/>                                      
   <input type="text" name="first name" size="50">       
   <br/>
   Middle Initials: <br/>                                      
   <input type="text" name="middle initials" size="5">       
   <br/>
   Last Name:<br/>                                      
   <input type="text" name="last name" size="50">       
   <br/><br/>
   Publisher:<br/>
   <input type="text" name="company" size="50"> 
   <br/><br/>
   Publisher's Address:<br/>
   <textarea name="company address" rows="4" cols="50"></textarea>
   <br/> 
   City:<br/>                                      
   <input type="text" name="city" size="20">    
   <br/>
   Country:<br/>                                      
   <input type="text" name="country" size="20"> 
   <br/><br/>
   Subject: <br/>
   <select name="industry">
    <option value=Chemistry>Chemistry</option>
   <option value= Science Fiction>Science Fiction</option>
   <option>Science and Tech</option> 
   <option>Statistics</option>
   <option>Biochemistry</option>
   <option>Molecular Biology</option>
   <option>Genetics</option>
   <option>Accounting</option>
   <option>Business Studies</option>
   <option>Web Devoloping</option>
   <option>Food Science</option>
   <option>Short stories</option>
   <option>Applications</option>
   <option>Graphics</option>
   <option>Medical Sciences</option>
   <option>Engineering</option>
   <option>Software Engineerinf</option>
   <option>other</option>
   <option>Zoology</option>
   <option>Plant Sciences</option>
   <option>Physics</option>
   <option>Applied Mathematics</option>
   <option>Pure Mathematics</option>
   </select>
   <br/>   <br/>
   No of Volumes:<br/>
   <select name="No of Volumes"> 
   <option></option> 
   <option value=1>1</option> 
   <option>2</option> 
   <option>3</option> 
   <option>4</option>
<option>5</option>
<option>6</option>
<option>more than 6</option>   
   </select>
   <br/><br/>
   
  Telephone:<input type="int" name="phone" size="20"> ext.<input type="int" name="ext" size="5">
  <br/>
  Fax:<br/>
  <input type="int" name="fax" size="20"><br/> 
  Email:<br/><input type="text" name="email" size="20"><br/>
  Send E-Mail Notofications:<br>
  <input type="checkbox" name="email_notification" value="send"><br><br>
  User Name:<br/><input type="text" name="username" size="20"><br/><br/>
  Password:</br><input type="password" name="password" size="20" maxlength="20"> </br></br>
  Confirm Password:</br><input type="password" name="password_conf" size="20" maxlength="20"> </br></br>

  <input type="submit" value="submit" name="submit">
                    

   </form>
</p> 
    </div>
   </div>
    <br class="clearFloat" />
	<div id="footer">
     <hr color=green>
    <div style="float: left; color:green">Copyrights &copy; Standard Publications Sri Lanka </div>
    <div style="float: right; text-align: right;"><a href="#">Privacy</a> | <a href="#">Legal Conditions</a> | <a href="#">Site Map</a></div>
  </div>
		
  </div>
    
  <div id="credit"></div>
</div>
</body>
</html>

