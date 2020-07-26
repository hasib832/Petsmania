<?php

session_start();
require("connection.php");



$query="DELETE FROM tips WHERE tip_id=".$_GET['id']. ";";

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error());

if ($result){
    echo "<script>alert('Successfuly Deleted')</script>";
     include("pettips.php");
    }
else
    echo "<script>alert('Failed to Delete')</script>: ";

?>