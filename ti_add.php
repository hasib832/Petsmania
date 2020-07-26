<?php

session_start();
require("connection.php");

$ptips = $_POST['ptips'];
$animals = $_SESSION['animals'];

$a = mysqli_real_escape_string($connection,$ptips);



$query="insert into tips(animals,description)values('$animals','$a');";

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));

if ($result){
    echo "<script>alert('Successfuly Added')</script>";
     include("pettips.php");
    }
else
    echo "<script>alert('Failed to Add')</script>";







?>
