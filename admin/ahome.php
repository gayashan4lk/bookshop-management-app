<?php
session_start();
if(!isset($_SESSION["adminuser"])) {
header("Location: admin.php");
exit;
}
?>
<html>
<head>
<!-- head section -->
<link href="styles.css" rel="stylesheet" type="text/css">
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
  <div id="logo"><a href="#"><img src="../images/images3.jpg" alt="" height=117 width="220"  /></a></div>
    <div id="nav">
      <ul>
        
        
      </ul>
   
    </div>
    
  </div>
</div>

<div id="outerWrapper">
  <div id="contentWrapper">
   <div id="leftColumn1">
      <div id="leftColumnContent"> 
	  <ul>
	  <li><a href="ahome.php"><img src="../images/ahome.jpg" alt="Home" width="110" /></a></li>
        <li> <a href="clients.php"><img src="../images/aclient.jpg" alt="Client" width="110" /> </a></li>
        <li><a href="customer.php"><img src="../images/acustomer.jpg" alt="Customer" width="110" /> </a></li>
	  <li><a href="alogoff.php"><img src="../images/alogoff.jpg" alt="logoff" width="110" /></a></li>
	  </ul>
   	  
      
          <br />
          
          </p>
        
      </div>
    </div>
    
        
    <div id="content">
   <br/><br/> <br/><br/> 
<h1>Welcome <?php echo $_SESSION['adminuser']; ?></h1>
<h1>STANDARD PULICATIONS</h1>
<h2>Home-Admin</h2>

    </div>
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
