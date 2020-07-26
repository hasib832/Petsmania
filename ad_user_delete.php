<?php

session_start();
require("connection.php");



if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['user'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['user'] as $selected){
$query = "delete  FROM user_login where user_id=$selected;";

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));

}
}
}


//$id=$_POST['user'];

//$query = "delete  FROM user_login where user_id=$selected;";

/*
$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error());
*/
//step 6: display the result
if ($result){
    echo "Deleted successfully";
include("admin_user_details.php");}
else
{echo "Error in Deleting: " . mysqli_error();}



?>
