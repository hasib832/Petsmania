<style>
    .formfield * {
  vertical-align: top;
}

    
 
    
    
</style>




<?php
session_start();
if(isset($_GET['id']))
{
$_SESSION['id'] = $_GET['id'];}

echo"<h1> updating tip </h1>
        <form action='ti_update.php' method='post' >
        

<p class='formfield'>    
<label> Enter Tips:</label>
	
<textarea name='pptips' cols='60' rows='10'>  </textarea>
	<input type='submit' name='submit'>
        </p>
	
	</form>";







?>
