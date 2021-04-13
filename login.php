<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <form method="POST" action="process.php">
    <?php if(@$_GET['loginmsg']==true){ ?>
      <div class="alert"><?php echo $_GET['loginmsg']; ?></div>
      <?php } ?>
    <p>Username</p>
    <input type="text" name="username" required/>
    <p>Password</p>
    <input type="password" name="password" required/>
    <button class="buttons" name="Login">Login</button>
    <p>New to FDM? <a href="register.php">sign up</a> here!</p>
  </form>
</body>
</html>
