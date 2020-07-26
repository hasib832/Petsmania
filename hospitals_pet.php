<?php
session_start();
?>
<html>
    <head>
        <title> hospital details</title>
        
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #FFB833;
  
}

tr:nth-child(odd) {
 background-color:#806F65;
 }
#addbtn
 {
	 width:5em;
	 height:2em;
	 font-size:15px;
 }
</style>
    
    
    </head>
    <?php include 'dependencies.php'; ?>
    
    
    <body>
        <br><br><br><br><br>
         <?php
            require 'header.php';
           ?> 
        <div id="dynamic_content">
            
        </div>
        <?php include 'post-ad-part-1.php';?>
        
	<h1>&nbsp&nbsp Government Veterinary Hospitals in Goa </h1>
	<div style="position:relative;">
   <img src='https://cdn3.vectorstock.com/i/1000x1000/34/77/the-exterior-veterinary-clinic-with-the-vector-26873477.jpg'
   style="position:absolute; top:-80px; left:700px; z-index:-10; width:450px; height:350px; border:none;"
   alt="Vet clinic"
   title="Vet clinic" />
	<img src="https://williamsburgvets.com/wp-content/uploads/2017/05/Dermatology.png"
   style="position:absolute; top:325px; left:900px; z-index:-1; width:400px; height:200px; border:none;"
   alt="Vet with dog"
   title="Vet with dog" />
	<img src='https://williamsburgvets.com/wp-content/uploads/2017/05/Dentistry.png'
   style="position:absolute; top:550px; left:700px; z-index:-5; width:400px; height:200px; border:none;"
   alt="Vet with cat"
   title="Vet with cat" />
   
	</div>


	 <!--style="float:right; left:-700px; top:-20px;" alt="Vet with dog" height="300" width="500">
	 style="float:right; top:200px;" alt='' height='300' width='500'>
    -->
   <!--
   <table>
        <tr> 
            <th>Hospital Name</th> <th>Address</th> <th>Contact</th>   
        </tr>
            
        <tr>
            <td> Government Veterinary Hospital </td>  <td> St Inez Rd, Santa Inez, Panaji, Goa 403001 </td> <td> 8322462423 / +91 7030143108  </td>
        </tr>
        
        <tr>
            <td> Government Veterinary Hospital Sonsodo </td> <td> Margao – Curtorim - Macasana Rd, Sonsodo, Gogol, Margao, Goa 403709 </td>  <td> 0832 2759392 </td>
        </tr>
            
        <tr> 
            <td> Government Veterinary Hospital </td> <td> Curti, Ponda, Goa 403401 </td> <td> 0832 2313027 </td>
        </tr>
            
        <tr> 
            <td> Department Of Animal Husbandry & Veterinary Services </td> <td> Pashusamvardhan Bhavan, MG Rd, patto, Panaji, Goa 403001 </td> <td> 0832 2437245 </td>
        </tr>
        
        <tr> 
            <td>  Government Veterinary Hospital </td> <td> Acoi Village, Goa 403519 </td> <td> 0832 2257237  </td>
        </tr>
        
        <tr> 
            <td> Manika Animal Hospital </td> <td> per-seraulim p/o colva, Goa 403712 </td> <td> 094212 49673 </td>
        </tr>
        
        <tr> 
            <td> Government Veterinary Hospital </td> <td> Lamgaon, Bicholim, Goa 403504 </td> <td> N/A for now </td>
        </tr>   
    </table> 
   -->
        <?php
        
      
        
        include("connection.php");
        
        
        
//step 4: create query

$query = "SELECT * FROM hospital;";
//step 5: execute query
$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));

  //step 6: check result
 if (mysqli_num_rows($result) > 0)
   {
  echo"<ol>";
     while($row = mysqli_fetch_array($result))
     {
 echo "<li><u>Hospital Name:</u> ".$row['hospital_name']."</br>
             <u>Address:</u> ".$row['hospital_address']."</br>
             <u>Contact:</u> ".$row['hospital_phone_no']."</br>";
               
             
            // $_SESSION['id']=$row['hospital_id'];
                 
                if($_SESSION['role']=="admin")
                {
                    echo"<a href='delete_hosp.php?id=".$row['hospital_id']."'>DELETE</a></br>";
                    
                    echo"<a href='new_hosupdate.php?id=".$row['hospital_id']."'>UPDATE</a></br><br>";
                       
                   // $_SESSION['id']=$row['hospital_id'];
                    
                    
                }
                
                else
                    
                { 
                    echo "";
                }
        echo"</li>";
   
   }
      echo"</ol>";
   }

//step 7: close connection
mysqli_close($connection);



?>
   
   
    
   <!-- <ol type="1">
        <li>
            <h3> Government Veterinary Hospital </h3> 
            <p> <b>Address:</b> St Inez Rd, Santa Inez, Panaji, Goa 403001 </p> 
            <b>Hours:</b> <br>
            Wednesday 9am - 12.30pm, 2pm - 5pm <br>
            Thursday 9am - 12.30pm, 2pm - 5pm <br>
            Friday 9am - 12.30pm, 2pm - 5pm <br>
            Saturday 9am - 12.30pm, 2pm - 5pm <br>
            Sunday 9am - 12.30pm, 2pm - 5pm <br>
            Monday 9am - 12.30pm, 2pm - 5pm <br>
            
            <b> Contact: </b> 8322462423 / +91 7030143108
        </li>
        
        <li>
            <h3> Government Veterinary Hospital Sonsodo </h3> 
            <p> <b>Address:</b> Margao – Curtorim - Macasana Rd, Sonsodo, Gogol, Margao, Goa 403709 </p> 
            <b>Hours:</b> <br>
            Wednesday 9am - 5pm <br>
            Thursday 9am - 5pm <br>
            Friday 9am - 5pm <br>
            Saturday <b> Closed</b> <br>
            Sunday <b>Closed</b> <br>
            Monday 9am - 5pm <br>
            
            <b> Contact: </b> 0832 2759392
        </li>
        
        <li>
            <h3> Government Veterinary Hospital </h3> 
            <p> <b>Address:</b> Curti, Ponda, Goa 403401 </p> 
            <b>Hours:</b> <br>
             Emergency Hospital
            
            <b> Contact: </b> 0832 2313027
            
        </li>
        
        <li>
            <h3> Department Of Animal Husbandry & Veterinary Services </h3> 
            <p> <b>Address:</b> Pashusamvardhan Bhavan, MG Rd, patto, Panaji, Goa 403001 </p> 
            <b>Hours:</b> <br>
            Wednesday 9.30am - 5.45pm <br>
            Thursday 9.30am - 5.45pm <br>
            Friday 9.30am - 5.45pm <br>
            Saturday <b>Closed</b> <br>
            Sunday <b>Closed</b> <br>
            Monday 9.30am- 5.45pm <br>
            
            <b> Contact: </b> 0832 2437245
            
        </li>
        
        
        <li>
            <h3> Government Veterinary Hospital </h3> 
            <p> <b>Address:</b> Acoi Village, Goa 403519 </p> 
            <b>Hours:</b> <br>
            Mornings: 9am – 12.30pm
            Afternoons: 2pm – 5pm
            Sundays and Holidays: 9am – 12pm

            <b> Contact: </b> 0832 2257237
            
        </li>
        
        <li>
            <h3> Manika Animal Hospital </h3> 
            <p> <b>Address:</b> per-seraulim p/o colva, Goa 403712 </p> 
            <b>Hours:</b> <br>
            Wednesday 12am - 12pm <br>
            Thursday 12am- 12pm <br>
            Friday 12am - 12pm <br>
            Saturday 12am - 12pm <br>
            Sunday 12am - 12pm <br>
            Monday 12am - 12pm <br>
            
            <b> Contact: </b> 094212 49673
            
        </li>
        
         <li>
            <h3> Government Veterinary Hospital </h3> 
            <p> <b>Address:</b> Lamgaon, Bicholim, Goa 403504 </p> 
           
            
        </li>
        
    </ol> -->
    
   <?php 
   if($_SESSION['role']=="admin")
   {
    echo"<form action='hospital_add.php'>
    <input type='submit' value='ADD' name='hospital form' id='addbtn'/>  
    </form>";
   
   }
   ?>
   
   
    </body>
</html>



