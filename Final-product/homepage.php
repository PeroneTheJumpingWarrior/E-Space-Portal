<?php
include_once('connection.php');
include_once('logout.php');
?>


<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
<title>FDM Employee Portal: Home Page</title>
<link rel="stylesheet" href="css/styling.css">
</head>
<body>
<div id="heading">
 <img class="logo" src="css/FDM_Logo.jfif" alt="FDM Main Logo" title="The FDM Group" align="left" />
 <br/><br/><br/><br/><br/>
 <h1>FDM E-Space Portal</h1>
</div>
<br/><br/>
<table class="navLinks" border="10" align="center" width="100%">
 <tr>
  <td><a href="homepage.php" target="_self">Home Page</a></td>
  <td><a href="viewforms.php" target="_self">Annual Leave Booking</a></td>
  <td><a href="selfservice.php" target="_self">Self Service Tasks</a></td>
  <td><a href="updateinfo.php" target="_self">Update Profile</a></td>
  <td><a href="homepage.php?logout=1" target="_self"><b>Log out</b></a></td>
 </tr>

 <!--WRITE LOGIN AND CONTACT US IN THE TABLE ROWS-->

</table>
<div id="PageBody" class="pgBody">
<br/>
 <h2>Welcome <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']; ?>!</h2>
 <p>We at FDM Group have created a Brand New Employee Portal named E-Space. Its purpose is to help all Employees connect together and remain updated on the latest news concerning their interests.
  <br/><br/>
  We aim to Update the Application by introducing updates and New Features in the near Future. Please do tell us anything about any new features you would like to see later on
  <br/><br/>
We Hope You Enjoy using E-Space!
<br/><br/><br/>
(The E-Space Development Team) <!--ALIGN THIS SENTENCE IN CENTER??-->
 </p>
 <br/>
 <h2>About The FDM Group</h2>
 <p>FDM is a management consulting firm offering Professional Services to different business clients with centres in the follow regions:
  <ul>
 <li>UK</li>
 <br/>
 <li>Germany</li>
 <br/>
 <li>Hong Kong</li>
 <br/>
 <li>Singapore</li>
 <br/>
 <li>China</li>
 <br/>
 <li>Australia</li>
 <br/>
 <li>US</li>
 <br/>
 <li>North America</li>
</ul>
  In addition it has consultants placed with clients across Europe and South Africa
<br/>
</p>
</div>
<br/>
<hr width="70%"/>
<div id="socialLinks">
 <p>&copyCopyright FDM Group 2021
  <br/>
Visit Official Website <a href="https://www.fdmgroup.com/" target="_blank">Here</a>
 </p>
 <table align="center" width="50">
  <tr>
 <td>
  <a href="https://twitter.com/FDMGroup" target="_blank">
   <img src="https://logos-world.net/wp-content/uploads/2020/04/Twitter-Symbol.png" alt="Twitter Logo" title="Tweet Us!" width="70" height="50"/></a>
 </td>
 <td>
  <a href="https://www.facebook.com/FDMGroup/">
   <img src="https://logodix.com/logo/1720792.png" alt="Facebook Logo" title="Find Us on Facebook!" width="90" height="50"/></a>
 </td>
 <td>
  <a href="https://www.instagram.com/fdm_group/" target="_blank">
   <img src="https://www.freepnglogos.com/uploads/transparent-instagram-logo----6.png" alt="Instagram Logo" title="We Are On Instagram!" width="60" height="45"/></a>
 </td>
 <td></td>
</tr>
 </table>
</div>
</body>
</html>
