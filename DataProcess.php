<?php 
require("Connection.php");

if(isset($_POST["save_contact"])){
    
    $op=$_POST["op_no"];
    $Name=$_POST["FullName"];

    $Age=$_POST["Age"];
    $PhoneNumber=$_POST["PhoneNumber"];
    $Sex=$_POST["Sex"];
    $HealthComp=$_POST["HealthComp"];
    $DrRemark=$_POST["DrRemark"];
    $adrs=$_POST["adrs"];
    $Occuptaion=$_POST["Occuptaion"];
    $dr_name=$_POST["dr_name"];
    $Department=$_POST["Department"];

    $insert="INSERT INTO `patientdata`(`op_no`,`Name`, `Age`, `Sex`, `HealthComp`,`Adress`, `DrRemark`, `PhoneNumber`, `Occupation`, `Dr_name`, `Department`) 
    VALUES ('".$op."','".$Name."','".$Age."','".$Sex."','".$HealthComp."','".$adrs."','".$DrRemark."','$PhoneNumber','$Occuptaion','$dr_name','$Department')";
    $result=mysqli_query($con,$insert);
    // echo $insert;

    if(!$result){
        // echo "0";                    
        echo "<script> location.href='AdminGeneralCamp.php'; alert('Something went wrong !! Please try again..');</script>";  
    }else{              
        echo "<script> location.href='AdminGeneralCamp.php'; alert('Patient Registered');</script>";                                                           
    } 
}

?>