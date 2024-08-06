<?php require("./Connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/AdminLogin.css ">
    <title>Alvas Medical Camp</title>
    <link rel="shortcut icon" href="logo.png"/>
</head>
<body>
  <h1 class="HeadLine">Login</h1>
    <!-- User Login Form -->
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" class="login-form">
    <div class="row">
      <a href="/MedicalCamp" class="home">Home</a>
      <label for="text">Select Camp</label>
      <select name="Camp">
        <option value="General">General</option>
        <option value="Blood">Blood</option>
      </select>
    </div>
    <div class="row">
      <label for="text" class="red-color">Username</label>
      <input type="email" name="AdminName" autocomplete="off" placeholder="Email" >
    </div>
    <div class="row">
      <label for="password" class="red-color">Password</label>
      <input type="password" name="Password" placeholder="Password" class="invalid">
    </div>
    <button type="submit" name="Login" id="login-btn">Login</button>
  </form>
  <!-- New Password Update Form -->
  
      <?php
      function input_filter($data)
      {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
      }
    if(isset($_POST["Login"]))
    {

      #filtering the input data
      $AdminCamp=$_POST["Camp"];
     $AdminName=input_filter($_POST["AdminName"]);
     $AdminPass=input_filter($_POST["Password"]);
      #escaping special symbols belongs to SQL
     $AdminName=mysqli_real_escape_string($con,$AdminName);
     $AdminPass=mysqli_real_escape_string($con,$AdminPass);


     #query template

     $query = "SELECT * FROM `tbl_user` WHERE `email`=? AND `password`=?";

if ($stmt = mysqli_prepare($con, $query)) {
    mysqli_stmt_bind_param($stmt, "ss", $AdminName, $AdminPass); // binding values to the template
    mysqli_stmt_execute($stmt); // executing the statement
    
    if (mysqli_stmt_error($stmt)) {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) == 1) {
       session_start();
       $_SESSION["AdminLoginId"]=$AdminName;
       $_SESSION["AdminCampType"]=$AdminCamp;
      //  echo $AdminCamp;
       if($_SESSION["AdminCampType"]=="General")
       {
        header("location:AdminGeneralCamp.php");
       }
       else{
        header("location:AdminBloodCamp.php");
       }
    } else {
          echo "<script>alert('invalid username & password')</script>";
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($con);
} 
    }
  ?>
  <script src="/js/AdminLogin.js"></script>
</body>
</html>