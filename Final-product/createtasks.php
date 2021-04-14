<?php
include_once('connection.php');
session_start();

if($_SESSION['ismanager'] == 1){
  $title = $_POST['title'];
  $duedate = date("Y-m-d", strtotime($_POST['duedate']));
  $description = $_POST['description'];
  $managerid = $_SESSION['id'];

  $addnewtask = "INSERT INTO tasks (Title, DueDate, Description, ManagerID) VALUES ('$title', '$duedate', '$description', '$managerid')";
  $addnewtaskresult = mysqli_query($conn, $addnewtask);
  if($addnewtaskresult === true){
    header("location:selfservice.php?message=Task successfully added");
  }
  else{
    echo "Database connection error. Please try again";
  }
}
else{
  header("location:selfservice.php");
}
?>
