<?php 
 session_start();
 if(!isset($_SESSION["AdminLoginId"]))
 {
    header("location:AdminLogin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/AdminForm.css">
    <title>Alvas Medical Camp</title>
    <link rel="shortcut icon" href="logo.png"/>
</head>
<body>
  <nav>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="nav-form">
    <h2>Welcome <?php echo $_SESSION["AdminLoginId"]; ?></h2>
        <button type="submit" name="Logout">Logout</button>
    </form>
  </nav>
<div class="container"> 
  <form action="DataProcess.php" id="PatientData" method="POST">
    
  <div class="row">
    <div class="col-25">
      <label for="fname">OP No </label>
    </div>
    <div class="col-75">
      <input type="text"  name="op_no" placeholder="OP NO">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="FullName" placeholder="Name..">
    </div>
  </div>
    
  <div class="row">
    <div class="col-25">
      <label for="lname">Age</label>
    </div>
    <div class="col-75">
      <input type="number" name="Age" min="0" placeholder="Age..">
    </div>
  </div>  
    
  <div class="row">
    <div class="col-25">
      <label for="email">PhoneNumber</label>
    </div>
    <div class="col-75">
      <input type="number" name="PhoneNumber" maxlength="12"  placeholder="Contact Number..">
    </div>
  </div>
    
  <div class="row">
    <div class="col-25">
      <label for="country">Gender</label>
    </div>
    <div class="col-75">
      <select name="Sex">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">Address</label>
    </div>
    <div class="col-75">
      <textarea  name="adrs" placeholder="Address.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Occuptaion</label>
    </div>
    <div class="col-75">
      <input type="text"  name="Occuptaion" placeholder="Occuptaion..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Doctor's Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="dr_name" placeholder="Doctor's Name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Department</label>
    </div>
    <div class="col-75">
      <input type="text"  name="Department" placeholder="Department..">
    </div>
  </div>
    
  <div class="row">
    <div class="col-25">
      <label for="subject">HealthComplaint</label>
    </div>
    <div class="col-75">
      <textarea  name="HealthComp" placeholder="HealthComplaint.." style="height:200px"></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">DoctorRemarks</label>
    </div>
    <div class="col-75">
      <textarea  name="DrRemark" placeholder="DoctorRemarks.." style="height:200px"></textarea>
    </div>
  </div>
    
  
    
    
  <div class="row">
    <button type="submit" id="Submit" class="form-button" name="save_contact">Submit</button>
  </div>
  </form>
</div>
</body>
</html>


   
    <?php 
    if(isset($_POST["Logout"]))
    {
        session_destroy();
        header("location:AdminLogin.php");
    }
    ?>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
    
</body>
</html>