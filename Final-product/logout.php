<?php
session_start();
if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['id']);
  unset($_SESSION['firstName']);
  unset($_SESSION['lastName']);
  header("location:login.php?loginmsg=logout successful");
}

else if(!isset($_SESSION['id'])){
  header("location:login.php?loginmsg=login is required to access this page");
}

?>
