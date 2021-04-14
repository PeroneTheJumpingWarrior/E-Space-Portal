<?php
include_once('connection.php');
include_once('logout.php');
?>

<!DOCTYPE html>
<html>
 <head lang="en">
  <meta charset="utf-8">
  <title>FDM Employee Portal: Update Profile</title>
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
    <td><a href="updateinfo.php?logout=1" target="_self"><b>Log out</b></a></td>

   </tr>

   <!--WRITE LOGIN AND CONTACT US IN THE TABLE ROWS-->
  </table>
  <br/>
  <h2 id="Margin">Update Your Profile</h2>

  <?php if(@$_GET['updated']==true){ ?>
    <div class="alert"><?php echo $_GET['updated']; ?></div>
    <?php } ?>

  <form id="Margin" action="processinfo.php" method="POST">
    <h2>Change account details</h2>
    New Username: <input type="text" name="NewUserName" placeholder="Enter New Username"/>
    <p><small>Current Username: <?php echo $_SESSION['userName']; ?></small></p>
    <br/><br/><br/>
    Current Password: <input type="password" name="CurrentPw" placeholder="Enter Current Password"/>
    <br/><br/><br/>
    New Password: <input type="password" name="NewPw" placeholder="Enter New Password"/>
    <br/><br/><br/>
    Confirm Password: <input type="password" name="ConNewPw" placeholder="Enter New Password"/>
    <br/><br/><br/>

    <h2>Personal details</h2>
    First Name : <input type="text" placeholder="Enter First Name" name="NewFirstName"/>
    <br/><br/><br/>
    Last Name : <input type="text" placeholder="Enter Last Name" name= "NewLastName"/>
    <p><small>Current Name: <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']; ?></small></p>
    <br/><br/><br/>
    Date Of Birth : <input type="date" name="NewDOB"/>
    <p><small>Current DOB: <?php echo date("m-d-Y", strtotime($_SESSION['dob'])); ?></small></p>
    <br/><br/><br/>
    Email Address : <input type="email" name="NewEmail" placeholder="Enter New Email Address"/>
    <p><small>Current Email Address: <?php echo $_SESSION['email']; ?></small></p>
    <br/><br/><br/>
    Address Line 1: <input type="text" name="NewAddress1" placeholder="Enter Your Address line 1"/>
    <br/><br/><br/>
    Address Line 2: <input type="text" name="NewAddress2" placeholder="Enter Your Address line 2"/>
    <br/><br/><br/>
    Post Code: <input type="text" name="NewPostcode" placeholder="Enter Your Post Code"/>
    <p><small>Current Address: <?php echo $_SESSION['add1'].", ".$_SESSION['add2'].", ".$_SESSION['postcode'];?></small></p>
    <br/><br/><br/>
    Telephone Number: <input type="tel" name="NewTelephoneNumber" placeholder="Enter Your Telephone Number"/>
    <p><small>Current Telephone Number: <?php echo $_SESSION['tel']; ?></small></p>
    <br/><br/><br/>
    I Accept the <a href="https://www.fdmgroup.com/terms-conditions/" target="_self">Terms & Agreements</a>: <input type="checkbox" name="Terms&Agreements" required />
    <br/><br/><br/>
    <button name="Submit">Submit changes</button>
    <input type="reset" name="Reset Form" value="Reset Form"/>
  </form>
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
