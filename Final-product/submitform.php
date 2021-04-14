<?php
include_once('connection.php');
session_start();

if(isset($_POST['startdate']) && isset($_POST['enddate']) && isset($_POST['reason'])){
  $startdate = date("Y-m-d", strtotime($_POST['startdate']));
  $enddate = date("Y-m-d", strtotime($_POST['startdate']));
  $reason = $_POST['reason'];
  $userid = $_SESSION['id'];

  $sql = "INSERT INTO annual_leave (start_date, end_date, reasoning, userID) VALUES ('$startdate', '$enddate', '$reason', '$userid')";
  $result = mysqli_query($conn, $sql);

  if($result === true){
    header("location:viewforms.php");
  }
  else{
    echo "Database connection error. Please try again";
  }
}
else{
  header("location:annualleavebooking.php");
  exit();
}
?>
