    <style> 
#myDIV {
  width: 100%;
  //height: 200px;
  background-color: lightblue;
  border: 1px solid black;
  word-wrap: break-word;

       }
            
       

</style>


<?php

 require('connection.php');

$query = "SELECT * FROM feedback;";

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));

  
 if (mysqli_num_rows($result) > 0)
   {
     
     
  echo"<table bordercolour='white' border='2'><tr>  <th>User</th> <th>Feedback</th> <th>Rating</th>  </tr>";
     while($row = mysqli_fetch_array($result))
     {
 echo "<tr><td>".$row['feedback_user'].
      "</td><td> <div id='myDIV'><pre><p style='font-family:ariel; font-size:15px' >".$row['feedback_descr']."</p></pre></div>
      </td><td> ".$row['rating'].
      "</td></tr>";
     }
      echo"</table>";
   }
   




?>
