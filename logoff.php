<?php
session_start();
if(isset($_SESSION["user"])) {
unset($_SESSION["user"]);
}
header("Location: index.php");
exit;
?>

<html>
<!-- head section-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Title section -->
<title>Standard Publications Sri Lanka</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<style type="text/css" media="all"> 

@import url("styles.css");

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

<div id="outerWrapper">
  <div id="contentWrapper">
    <div id="leftColumn1">
      <div id="leftColumnContent">
         <ul>
        <li><a href="index.php"><img src="images/home.jpg" alt="Home" width="110" /></a></li>
        <li><a href="inquiries.html"><img src="images/inquiries.jpg" alt="inquiries" width="110" /></a></li>
        <li><a href="standards.html"><img src="images/standards.jpg" alt="Standards" width="110"  /></a></li>
       <li> <a href="contact.html"><img src="images/contact.jpg" alt="Contact us" width="110" /> </a></li>
        <li><a href="About.html"><img src="images/about.jpg" alt="About us" width="110" /> </a></li>
      </ul>
       
      </div>
    </div>
 <div id="content">  
<p><br/><br/><br/><br/>

  <h1 align="center">You are successfully logged off! </h1>  
</p>

</p>

    <br class="clearFloat" />
  </div>
  <div id="footer">
   <hr color=green>
    <div style="float: left; color:green">Copyrights &copy; Standard Publications Sri Lanka </div>
    <div style="float: right; text-align: right;"><a href="#">Privacy</a> | <a href="#">Legal Conditions</a> | <a href="#">Site Map</a></div>
  </div>
 
  <div id="credit"></div>
</div>
</body>
</html>

