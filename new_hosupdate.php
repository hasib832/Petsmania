<?php
session_start();
if(isset($_GET['id']))
{
$_SESSION['id'] = $_GET['id'];}

echo"<center><h1><br><br><br><br><i> Updating details </i></h1>
        <form action='new_hosupdate.php' method='post'>
	<SELECT name='deets'> 
	<OPTION>Select an option</option>
	<OPTION VALUE='hname'> Hospital Name </option>
	<OPTION VALUE='addr'> Address </option>
	<OPTION VALUE='cont'> Contact </option>
	</SELECT>
	<input type='submit' name='submit' style='width:'10em''>
        
	
	</form>";



if(isset($_POST['submit']))
            {
        
           
            
         $_SESSION['details']=$_POST['deets']; 
        
        echo "<form action='update_hospital.php' method='post' >";
        
        if($_SESSION['details'] == 'hname')
        { echo "<input type='text' name='hhname' placeholder='Hospital name'/> <input type='submit' name='subm' value='Submit'/> "; }
        
        else if($_SESSION['details'] == 'addr')
        { echo "<input type='text' name='aaddr' placeholder='Address'/> <input type='submit' name='subm' value='Submit'/> "; }
        
        else if($_SESSION['details'] == 'cont') 
        {echo "<input type='text' name='ccont' placeholder='Contact'/> <input type='submit' name='subm' value='Submit'/> ";}
        
        else {echo "Choose a valid option.";}
        
        
        echo "</form></center>";
        
        
             }



?>

