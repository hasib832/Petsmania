
          <?php
          session_start();
         // echo $_GET['id'];
                   $_SESSION['id'] = $_GET['id'];

          
          

	echo"<h1> updating details </h1>
        <form action='hospital_update.php' method='post' >
	<SELECT name='deets' multiple> 
	<OPTION VALUE='hname'> Hospital Name </option>
	<OPTION VALUE='addr'> Address 
	<OPTION VALUE='cont'> Contact
	</SELECT>
	<input type='submit' name='submit'>
        
	
	</form>";
        
        
        
        
        
        
         
        if(isset($_POST['submit']))
            {
        
           
            
         $_SESSION['details']=$_POST['deets']; 
        
        echo "<form action='update_hospital.php' method='post' >";
        
        if($_SESSION['details'] == 'hname')
        { echo "<input type='text' name='hhname' value='hosp'/> <input type='submit' name='subm' value='Submit'/> "; }
        
        else if($_SESSION['details'] == 'addr')
        { echo "<input type='text' name='aaddr' value='address'/> <input type='submit' name='subm' value='Submit'/> "; }
        
        else if($_SESSION['details'] == 'cont') 
        {echo "<input type='text' name='ccont' value='contact'/> <input type='submit' name='subm' value='Submit'/> ";}
        
        else {echo "Choose a valid option.";}
        
        
        echo "</form>";
        
        
             }
        
        ?>
 
