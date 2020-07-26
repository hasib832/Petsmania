<?php

session_start();
require("connection.php");



$query="DELETE FROM hospital WHERE hospital_id=".$_GET['id']. ";";

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));

if ($result){
    echo "<script>alert('Successfuly Deleted')</script>";
     include("hospitals_pet.php");
    }
else
    echo "<script>alert('Failed to Delete')</script>";

?>
