<?php

     session_start();
        require("connection.php");
        
        
        
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];
        
        $query = "SELECT * FROM user_login WHERE username='".$uname."'AND password='".$pass."';";
        
        
        $result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));
        
        
        
        
         if (mysqli_num_rows($result) > 0)
   {
             $_SESSION['role']= null;
             mysqli_close($connection);
      // include('hospitals_pet.php');
             include('pettips.php');
       
   }
   
   else
   {echo"empty table";
   mysqli_close($connection);}
  
   

?>