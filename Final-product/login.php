<!DOCTYPE html>
<html>
<head>
  <title>E-Space : Login</title>
  <link rel="stylesheet" href="css/login.css">
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
  <div id="LoginForm">
   <form method="POST" action="process.php">
    <?php if(@$_GET['loginmsg']==true){ ?>
      <div class="alert"><?php echo $_GET['loginmsg']; ?></div>
      <?php } ?>
    <p class="formTag"><u>Username:</u></p>
    <input type="text" name="username" required/>
    <p class="formTag"><u>Password:</u></p>
    <input type="password" name="password" required/>
	<br/><br/>
    <button class="buttons" name="Login">Login</button>
    <p class="formTag">New to FDM? <a href="register.php">Sign Up</a> here!</p>
   </form>
  </div>
  <br/><br/><br/><br/><br/><br/>
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
