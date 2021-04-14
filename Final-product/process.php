 <?php
require_once('connection.php');
session_start();

if(isset($_POST['Login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $loginquery = "SELECT * FROM users WHERE UserName='$username'";
  $loginresult = mysqli_query($conn, $loginquery);
  if($loginresult->num_rows > 0){
    while($row=$loginresult->fetch_assoc()){
      $decrypt = password_verify($password, $row['Password']); //decrypts password. returns true if hashed password matches hash input password
      $verified = $row["IsEmployed"];

      if($decrypt == 1 && $verified == 1){ //username=juliuscaliao password=password123
        $_SESSION['id'] = $row["userID"];
        $_SESSION['firstName'] = $row["FirstName"];
        $_SESSION['lastName'] = $row["LastName"];
        $_SESSION['userName'] = $row["UserName"];
        $_SESSION['password'] = $row["Password"];
        $_SESSION['email'] = $row["Email"];
        $_SESSION['dob'] = $row["DOB"];
        $_SESSION['add1'] = $row["Address1"];
        $_SESSION['add2'] = $row["Address2"];
        $_SESSION['postcode'] = $row["PostCode"];
        $_SESSION['tel'] = $row["Telephone"];
        header("location:homepage.php");
      }

      else if($decrypt == 1 && $verified != 1){ //test account: username=jwang password=helloworld || username=johnwick123 password=johnwick
        header("location:login.php?loginmsg=Unfortunately you're not verified. please contact your manager or system administrator");
      }

      else{
        header("location:login.php?loginmsg=invalid login");
      }
    }
  }
  else{
    header("location:login.php?loginmsg=invalid login");
  }
}

if(isset($_POST['Register'])){
  $regfirstname = $_POST['fname'];
  $reglastname = $_POST['lname'];
  $regdob = date("Y-m-d", strtotime($_POST['dob']));
  $regemail = $_POST['email'];
  $regaddress1 = $_POST['address1'];
  $regaddress2 = $_POST['address2'];
  $regpostcode = $_POST['postcode'];
  $regtelephone = $_POST['telephone'];

  $regusername = $_POST['regusername'];
  $regpassword = $_POST['regpassword'];
  $conpassword = $_POST['conpassword'];

  $matchpasswords = $regpassword == $conpassword ? true : false;

  $registerquery = "SELECT * FROM users WHERE UserName='$regusername'";
  $registerresult = mysqli_query($conn, $registerquery);

  if($registerresult->num_rows > 0){
    header("location:register.php?registermsg=Username is already taken");
  }

  else if($matchpasswords == false){
    header("location:register.php?registermsg=Passwords needs to match");
  }

  if($resuregisterresultlt2->num_rows == 0 && $matchpasswords == true){
    $encryptpassword = password_hash($regpassword, PASSWORD_DEFAULT);
    $registeracc = "INSERT INTO users (FirstName, LastName, UserName, Password, Email, DOB, Address1, Address2, PostCode, Telephone)
                    VALUES ('$regfirstname', '$reglastname', '$regusername', '$encryptpassword', '$regemail', '$regdob', '$regaddress1', '$regaddress2',  '$regpostcode', '$regtelephone')";
    mysqli_query($conn, $registeracc);
    header("location:login.php?loginmsg=You have successfully created an account. You can now log in once you are verified");
  }
}
?>
