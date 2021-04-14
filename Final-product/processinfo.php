<?php
include_once('connection.php');
session_start();

$sessionid = $_SESSION['id'];
$pwquery = "SELECT * FROM users WHERE userID='$sessionid'";
$pwresult = mysqli_query($conn, $pwquery);
$row = $pwresult->fetch_assoc();

if($_POST['NewUserName'] != ""){
  $username = $_POST['NewUserName'];
  $userquery = "SELECT * FROM users WHERE UserName='$username'";
  $userresult = mysqli_query($conn, $userquery);
  if($userresult->num_rows > 0){
    header("location:updateinfo.php?updated=username already taken");
  }
  else{
    $updateusername = "UPDATE users SET UserName='$username' WHERE userID='$sessionid'";
    if(mysqli_query($conn, $updateusername)){
      $_SESSION['userName'] = $username;
      header("location:updateinfo.php?updated=update successful");
    }
    else{
      header("location:updateinfo.php?updated=connection error");
    }
  }
}

if($_POST['CurrentPw'] != "" || $_POST['NewPw'] != "" || $_POST['ConNewPw'] != ""){
  if($_POST['CurrentPw'] != "" && $_POST['NewPw'] != "" && $_POST['ConNewPw'] != ""){
    $decrypt = password_verify($_POST['CurrentPw'], $row['Password']);
    if($_POST['NewPw'] == $_POST['ConNewPw'] && $decrypt == 1){
      $password = $_POST['NewPw'];
      $encryptpassword = password_hash($password, PASSWORD_DEFAULT);
      $updatepw = "UPDATE users SET Password='$encryptpassword' WHERE userID='$sessionid'";
      if(mysqli_query($conn, $updatepw)){
        $_SESSION['password'] = $encryptpassword;
        header("location:updateinfo.php?updated=update successful");
      }
      else{
        header("location:updateinfo.php?updated=connection error");
      }
    }
    else if($decrypt == 1){
      header("location:updateinfo.php?updated=new password and confirm password needs to match");
    }
    else if($_POST['NewPw'] == $_POST['ConNewPw']){
      header("location:updateinfo.php?updated=current password incorrect");
    }
    else{
      header("location:updateinfo.php?updated=new password and confirm password needs to match");
    }
  }
  else{
    header("location:updateinfo.php?updated=All three fields needs to be filled in");
  }
}

if($_POST['NewFirstName'] != ""){
  $firstname = $_POST['NewFirstName'];
  $updatefirstname = "UPDATE users SET FirstName='$firstname' WHERE userID='$sessionid'";
  if(mysqli_query($conn, $updatefirstname)){
    $_SESSION['firstName'] = $firstname;
    header("location:updateinfo.php?updated=update successful");
  }
  else{
    header("location:updateinfo.php?updated=connection error");
  }
}

if($_POST['NewLastName'] != ""){
  $lastname = $_POST['NewLastName'];
  $updatelastname = "UPDATE users SET LastName='$lastname' WHERE userID='$sessionid'";
  if(mysqli_query($conn, $updatelastname)){
    $_SESSION['lastName'] = $lastname;
    header("location:updateinfo.php?updated=update successful");
  }
  else{
    header("location:updateinfo.php?updated=connection error");
  }
}

if($_POST['NewDOB'] != ""){
  $dob = $_POST['NewDOB'];
  $updatedob = "UPDATE users SET DOB='$dob' WHERE userID='$sessionid'";
  if(mysqli_query($conn, $updatedob)){
    $_SESSION['dob'] = $dob;
    header("location:updateinfo.php?updated=update successful");
  }
  else{
    header("location:updateinfo.php?updated=connection error");
  }
}

if($_POST['NewEmail'] != ""){
  $email = $_POST['NewEmail'];
  $updateemail = "UPDATE users SET Email='$email' WHERE userID='$sessionid'";
  if(mysqli_query($conn, $updateemail)){
    $_SESSION['email'] = $email;
    header("location:updateinfo.php?updated=update successful");
  }
  else{
    header("location:updateinfo.php?updated=connection error");
  }
}

if($_POST['NewAddress1'] != ""){
  $add1 = $_POST['NewAddress1'];
  $updateadd1 = "UPDATE users SET Address1='$add1' WHERE userID='$sessionid'";
  if(mysqli_query($conn, $updateadd1)){
    $_SESSION['add1'] = $add1;
    header("location:updateinfo.php?updated=update successful");
  }
  else{
    header("location:updateinfo.php?updated=connection error");
  }
}

if($_POST['NewAddress2'] != ""){
  $add2 = $_POST['NewAddress2'];
  $updateadd2 = "UPDATE users SET Address2='$add2' WHERE userID='$sessionid'";
  if(mysqli_query($conn, $updateadd2)){
    $_SESSION['add2'] = $add2;
    header("location:updateinfo.php?updated=update successful");
  }
  else{
    header("location:updateinfo.php?updated=connection error");
  }
}

if($_POST['NewPostcode'] != ""){
  $postcode = $_POST['NewPostcode'];
  $updatepostcode = "UPDATE users SET PostCode='$postcode' WHERE userID='$sessionid'";
  if(mysqli_query($conn, $updatepostcode)){
    $_SESSION['postcode'] = $postcode;
    header("location:updateinfo.php?updated=update successful");
  }
  else{
    header("location:updateinfo.php?updated=connection error");
  }
}

if($_POST['NewTelephoneNumber'] != ""){
  $telnumb = $_POST['NewTelephoneNumber'];
  $updatetel = "UPDATE users SET Telephone='$telnumb' WHERE userID='$sessionid'";
  if(mysqli_query($conn, $updatetel)){
    $_SESSION['tel'] = $telnumb;
    header("location:updateinfo.php?updated=update successful");
  }
  else{
    header("location:updateinfo.php?updated=connection error");
  }
}
?>
