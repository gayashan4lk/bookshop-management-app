<?php
session_start();
$mess="";
if(isset($_POST["submit"])) {
    include("dbcon.php");	//database connection function
    
    $user=$_POST["username"];
    $password=md5($_POST["password"]);
    $query="SELECT username from user_info WHERE username='$user' AND password='$password' and usertype='C'";
    //echo $query;
    $result=$db->db_query($query,"array");

    if(count($result)==0) {
    $mess = "<font color=purple size=2><b>Wrong username or password.</font>";
    } else {
    $_SESSION["user"]=$result[0]['username'];
    //header("Location: ahome.php");
    //exit;
    }
        
}    
?>

<html>
<head>
<!-- head section -->
<link href="stylesi_index.css" rel="stylesheet" type="text/css">
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
    <div id="logo"><a href="#"><img src="images/images3.jpg" alt="" width="220" height="117" /></a></div>
    <div id="nav">
     
    </div>
    
  </div>
</div>

<div id="outerwrapper">

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

</br>

<p1>
   <div id="content">
	
<table width="150" border="2" align="right" cellpadding="0" cellspacing="1" bgcolor="green">
<tr>
<form name="form1" method="post" action="">
<td height="100">
<table width="85%"  border="0" cellpadding="3" cellspacing="1" bgcolor="green">
<tr>
<td colspan="3"><div align="center"><h2 style=color:white><strong>Standard Publications Sri Lanka</strong></h2></div></td>
</tr>
<?php 
    if(isset($_SESSION["user"])){ 
        echo "<tr><td>Welcome ".$_SESSION["user"]."</td></tr>";
        echo "<tr><td><a href='logoff.php'>Logout</a></td></tr>";
    }else{
?>
<tr>
<td width="92">Username</td>
<td width="7">:</td>
<td width="475"><input name="username" type="text" id="username"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td height="98">&nbsp;</td>
<td>&nbsp;</td>
<td><p>
  <input type="submit" name="submit" value="LOGIN">
  <?php
  echo $mess."<br><br>";
  ?>
</p>
  <p><tr>
<td colspan="3"><div align="center"><h3 style=color:white>New users please <a href="signup.php"><i>SignUp</i></a> now</p></h3></div></td>
</td>
</tr>
<?php } ?>
</table>
</td>
</form>
</tr>
</table>


<div class="content clearfix">
   <div class="main">
          
       <h2 align="left"><strong>Why <br>Online Standard Publications??</strong></h2><hr color=green>
	   Standard Publications Sri LAnka is dedicated to the effective management of records and the preservation, care of readers and authors. Standard Publication is an incredible resource. 
	  The Online Standard Publications is a neutral, non-governmental organisation. Our online quality management system will eliminate nonconformance to specifications, standards, and 
	  customer expectations in the most cost effective and efficient manner. 
	  <br><br>
	  
           <h3>CERTIFICATE- WHY? HOW? <br>
		   To Society </h3><br>
<p>

              “Be as careful of the books you read, as of the company you keep; for your habits and character will be as much influenced by the former as the latter.” 
<br>-Paxton Hood
<br><br>
It is clear as a crystal that reading changes a person. Therefore in order to maintain and develop the attitudes of the community it is important to let the readers have great books. Reading also provides a window on the world.  It actually influences the socio- economic development.<br><br><h3>To Author<br></h3>
 One of the common pieces of marketing advice you will see is to identify your target audience. What sort of person will enjoy your book? Where might you find them? How old are they? Male or Female?
It can seem really daunting for a first time author, who, figures that they can’t really know who will and won’t like their book. And what’s wrong with marketing it to everyone? If they buy it, that’s the important bit isn’t it?
So it has a great advantage of evaluating the standard and the quality of any publication. Online Standard Publications will do so and categorize the publication and will offer a worldwide accepted certificate.

           </p>
           <br/>
           

      <h2 align="right"><strong>Why Are We Issuing </strong> <br/>
                Our “Online Standard Publications” ? ?</h2><hr color=green>
          <p>
             <ul "circle">
               <li>Take control of your publication's quality online.</li><br/>
                <li>To reduce your cost.</li><br/>
				 <li>To save your time.</li><br/>
                 <li>To cater all readers in the world with assurance.</li><br/>
				   </ul><br><hr color=green>
             If you are ready...just <a href="form.html"> <i>Register</i>  </a> WITH US. 
          </p>
          <br/><br/>

       

    <br class="clearFloat" />
	
	
  </div>

</div>

</div>
<div id="credit"></div>
  <div id="footer">
    <hr color=green>
    <div style="float: left; color:green">Copyrights &copy; Standard Publications Sri Lanka </div>
    <div style="float: right; text-align: right;"><a href="#">Privacy</a> | <a href="#">Legal Conditions</a> | <a href="#">Site Map</a></div>
  </div><br>
</div>

</div>


</body>
</html>

