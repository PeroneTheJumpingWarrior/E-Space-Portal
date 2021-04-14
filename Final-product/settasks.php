<?php
include_once('connection.php');
include_once('logout.php');
?>

<!DOCTYPE html>
<html>
 <head lang="en">
  <meta charset="utf-8">
  <title>FDM Employee Portal: Set Tasks</title>
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
  	<td><a href="homepage.php" target="_self">Self Service Tasks</a></td>
  	<td><a href="updateinfo.php" target="_self">Update Profile</a></td>
    <td><a href="annualleavebooking.php?logout=1" target="_self"><b>Log out</b></a></td>

   </tr>

  </table>
  <br/>
  <h2 id="Margin">Assign Tasks</h2>


  <form id="Margin" action="createtasks.php" method="POST">
    <fieldset>
      Title : <input type="text" name="title" required/>
      <br/><br/><br/>
      Due date : <input type="date" name="duedate" required/>
      <br/><br/><br/>
      Description : <textarea rows="7" cols="100" name="description" required/></textarea>
      <br/><br/><br/>
      <input type="submit" value="Submit"/>
      <input type="reset" name="Reset Form" value="Reset Form"/>
      <a href="selfservice.php">view tasks</button>
    </fieldset>
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
