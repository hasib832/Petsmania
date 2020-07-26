<style>
    .formfield * {
  vertical-align: top;
}

    
 
    
    
</style>


<?php

session_start();

if(isset($_GET['general']))
{   $_SESSION['animals']="general";     }

else if(isset($_GET['dog']))
{ $_SESSION['animals']="dog"; }

else if(isset($_GET['cat']))
{ $_SESSION['animals']="cat"; }

if($_SESSION['animals']=="general")
{echo "ADD GENERAL CATEGORY";}

else if($_SESSION['animals']=="dog")
{echo "ADD DOGS";}

else if($_SESSION['animals']=="cat")
{echo "ADD CATS";}


echo"<form action='ti_add.php' method='post'>
    
<p class='formfield'>    
<label> Enter Tips:</label>
    <textarea name='ptips' cols='60' rows='10'>  </textarea>
    <input type='submit' name='submit'>
    </p>
    
</form>";




?>