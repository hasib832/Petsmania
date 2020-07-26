<?php

session_start();
require("connection.php");

//if(isset($_GET['star']))

$star = $_POST['star'];
 


$uname = $_POST['uname'];
$comment = $_POST['comment'];


$a = mysqli_real_escape_string($connection,$comment);



$query="insert into feedback(feedback_user,feedback_descr,rating)values('$uname','$a','$star');";

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));

if ($result){
    echo "<script>alert('Successfuly Added')</script>";
     include("feedback_form.php");
    }
else
    {
echo "<script>alert('Failed to Add')</script>"; }


?>