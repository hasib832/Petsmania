<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> admin verification page</title>
    </head>
    <body>
        
        
        
        
        <?php
        
        session_start();
        require("connection.php");
        
        
        
        $aname=$_POST['aname'];
        $pass=$_POST['pass'];
        
        $query = "SELECT password FROM admin WHERE admin_name='".$aname."'AND password='".$pass."';";
        
        
        $result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));
        
        
        
        
         if (mysqli_num_rows($result) > 0)
   {
        $_SESSION['role'] = "admin";
                
                echo "<a href='feedback_user.php'> User's feedback </a>";
                 echo "<a href='hospitals_pet.php'> Hospital Details </a>";
                 echo "<a href='pettips.php'> Pet Tips </a>";
                
   }
   
  mysqli_close($connection);
  
   //include('hospitals_pet.php'); // Has to go to the main home page with the menu bar instead of single webpages
   //include('pettips.php');
  




        
        
        
        
        ?>
    </body>
</html>
