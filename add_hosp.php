<?php

session_start();
require("connection.php");

$Hname = $_POST['Hname'];
$address=$_POST['address'];
$contact=$_POST['contact'];

$query="insert into hospital(hospital_name,hospital_address,hospital_phone_no)values('$Hname','$address',$contact);";

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));

if ($result){
    echo "<script>alert('Successfuly Added')</script>";
     include("hospitals_pet.php");
    }
else
    echo "<script>alert('Failed to Add')</script>";

?>