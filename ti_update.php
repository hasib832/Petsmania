<?php

session_start();
require("connection.php");



 
     $pptips=$_POST['pptips'];
    // echo $pptips;
     
     $a = mysqli_real_escape_string($connection,$pptips);
     
     $query="UPDATE tips SET description='".$a. "' WHERE tip_id='".$_SESSION['id']."';";
     
     
     
     $result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));

if ($result){
    echo "<script>alert('Successfuly Updated')</script>";
     include("pettips.php");
    }
else
    echo "<script>alert('Failed to Update')</script> ";



?>

 