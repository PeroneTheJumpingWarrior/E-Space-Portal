<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="css/register.css">
</head>
<body>
 <div id="heading">
  <img class="logo" src="css/FDM_Logo.jfif" alt="FDM Main Logo" title="The FDM Group" align="left" />
  <br/><br/><br/><br/><br/>
  <h1>FDM E-Space Portal</h1>
  <br/>
  <hr class="hrStyling" width="90%"/>
 </div>
 <br/><br/>
 <h2>Register to the E-Space Portal</h2>
 <br/>
 <div id="LoginForm">
  <form method="POST" action="process.php">
    <?php if(@$_GET['registermsg']==true){ ?>
      <div class="alert"><?php echo $_GET['registermsg']; ?></div>
      <?php } ?>
      <p>First name(s)</p>
      <input type="text" name="fname" required/>
      <p>Last name</p>
      <input type="text" name="lname" required/>
      <p>Date of birth</p>
      <input type="date" name="dob" required/>
      <p>Email Address</p>
      <input type="email" name="email" required/>
      <p>Address line 1</p>
      <input type="text" name="address1" required/>
      <p>Address line 2</p>
      <input type="text" name="address2" required/>
      <p>Post code</p>
      <input type="text" name="postcode" required/>
      <p>Telephone number</p>
      <input type="tel" name="telephone" required/>
      <p>Create username</p>
      <input type="text" name="regusername" required/>
      <p>Create password</p>
      <input type="password" name="regpassword" required/>
      <p>Confirm password</p>
      <input type="password" name="conpassword" required/>
	<br/><br/>
    <button class="buttons" name="Register">Register</button>
    <p>Have an account? <a href="login.php">Sign In</a> here!</p>
  </form>
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
