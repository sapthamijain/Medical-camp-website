<?php 
 $con=mysqli_connect("localhost","root","","medical_camp");
if(mysqli_connect_error())
{
    echo "cannot connect to database";
    exit();
}

?>