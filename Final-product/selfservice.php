<?php
include_once('connection.php');
include_once('logout.php');

$sessionid = $_SESSION['id'];
$query = "SELECT * FROM users WHERE userID='$sessionid'";
$result = mysqli_query($conn, $query);
$row = $result->fetch_assoc();

$managerid = $row['ManagerID'];
$_SESSION['ismanager'] = $sessionid == $row['ManagerID'] ? true : false;
echo $_SESSION['ismanager'];
?>

<!DOCTYPE html>
<html>
 <head lang="en">
  <meta charset="utf-8">
  <title>FDM Employee Portal: Self Service Tasks</title>
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
     <td><a href="selfservice.php?logout=1" target="_self"><b>Log out</b></a></td>
   </tr>
   <!--WRITE LOGIN AND CONTACT US IN THE TABLE ROWS-->
  </table>
  <div id="Tasks">
    <?php if($_SESSION['ismanager'] == 1){ ?>
      <a href="settasks.php"><button>Assign tasks</button></a>
    <?php } ?>
   <h2><u>Hello <?php echo $_SESSION['firstName']." ".$_SESSION['lastName'];?>!</u></h2>
   <br/>
   <strong>Assigned Tasks : </strong>

   <?php
     $tasksquery = "SELECT Title, DueDate, Description FROM tasks WHERE ManagerID='$managerid' ORDER BY DueDate ASC";

     $tasksresult = mysqli_query($conn, $tasksquery);

     if($tasksresult->num_rows > 0){
       while($row = $tasksresult-> fetch_assoc()){ ?>
         <div id="lists">
         <?php
           echo "<h3> ".$row["Title"]."</h3>";
           echo "<h4> ".date("d-m-Y", strtotime($row["DueDate"]))."</h4>";
           echo "<p> ".$row["Description"]."</p>";
         ?>
        </div>
       <?php }
     }
 ?>
   <br/><br/><br/>
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
	</tr>
   </table>
  </div>
 </body>
</html>
