<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>
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
    <p>Telephone number</p>
    <input type="tel" name="address2" required/>
    <p>Create username</p>
    <input type="text" name="regusername" required/>
    <p>Create password</p>
    <input type="password" name="regpassword" required/>
    <p>Confirm password</p>
    <input type="password" name="conpassword" required/>
    <button class="buttons" name="Register">Register</button>
    <p>Have an account? <a href="login.php">sign in</a> here!</p>
  </form>
</body>
</html>
