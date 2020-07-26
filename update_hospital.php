<?php


session_start();
require("connection.php");



 if($_SESSION['details'] == 'hname')
 {
     $hhname=$_POST['hhname'];
    // echo $hhname;
     $query="UPDATE hospital SET hospital_name='".$hhname. "' WHERE hospital_id='".$_SESSION['id']."';";
 }
 
 else if($_SESSION['details'] == 'addr')
  { 
     $aaddr=$_POST['aaddr'];
     //echo $aaddr;
     $query="UPDATE hospital SET hospital_address='".$aaddr. "' WHERE hospital_id='".$_SESSION['id']."';";
  }
  
  else if($_SESSION['details'] == 'cont') 
   {
      $ccont=$_POST['ccont'];
     // echo $ccont;
      $query="UPDATE hospital SET hospital_phone_no='".$ccont. "' WHERE hospital_id='".$_SESSION['id']."';";
      
   }
        
       else {echo "Nothing works.";}

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));

if ($result){
    echo "<script>alert('Successfuly Updated')</script>";
     include("hospitals_pet.php");
    }
else
    echo "<script>alert('Failed to Update')</script>";



?>

