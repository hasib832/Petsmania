<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Managing user details</title>
    </head>
    <body>
        
        <h1>User details</h1>
        
        
        <?php
        
        require('connection.php');

$query = "SELECT * FROM user_login;";

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));

  
 if (mysqli_num_rows($result) > 0)
   {
     echo "<form action='ad_user_delete.php' method='post'>";
     
  echo"<table bordercolour='white' border='2'><tr> <th>id</th> <th>username</th> <th>firstname</th> <th>lastname</th> <th>phone_no</th> <th>address</th> <th>DELETE</th> </tr>";
     while($row = mysqli_fetch_array($result))
     {
 echo "<tr><td>".$row['user_id'].
      "</td><td> ".$row['username'].
      "</td><td> ".$row['firstname'].
      "</td><td> ".$row['lastname'].
      "</td><td> ".$row['phone_no'].
      "</td><td> ".$row['address'].
      "</td> <td><input type='checkbox' name='user[]' value='".$row['user_id']."'/></td></tr>";
     }
      echo"</table> <input type='submit' name='submit' value='DELETE'/></form>";
   }
   
   
   
   

//step 7: close connection
mysqli_close($connection);

        
        
        
        ?>
    </body>
</html>
