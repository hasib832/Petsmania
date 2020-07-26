<?php
session_start();
?>
<html>
    <head>
        <title>pet tips</title>
        <style>
            #mo{magin-left:150px}        
        </style>
    <style> 
#myDIV {
  width: 50%;
  //height: 200px;
  background-color: lightblue;
  border: 1px solid black;
  word-wrap: break-word;
 //word-break: keep-all;
 //white-space: pre-wrap;
       }
       
       #si {
           width: 10em;
           height: 3em;
           
           
           
       }       
       

</style>
    
    
    
    
    </head>
<?php include 'dependencies.php'; ?>

<body>
    
    <?php
            require 'header.php';
           ?> 
        <div id="dynamic_content">
            
        </div>
        <?php include 'post-ad-part-1.php';?>

<script language="javaScript" type="text/javaScript">

function add(animal)
{
//var tip=prompt("New pet care tip:","");

if(tip === null)
{
	alert("No new tip entered");
}
else
{
	if( animal == "dogs")
	document.getElementById("dogs").insertAdjacentHTML("BeforeBegin", "<li>" + tip + "</li>" );
	
	
	else if( animal == "cats")
	cats.insertAdjacentHTML("BeforeBegin", "<li>" + tip + "</li>" );
	
	else if( animal == "rabbits")
	rabbits.insertAdjacentHTML("BeforeBegin", "<li>" + tip + "</li>" );
}
}

</script>

<!--<form action="add_tips.php" method="post">
    
    Enter Tips:<textarea name="ptips" cols="60" rows="10">  </textarea>
    <input type="submit" name="submit">
    
    
</form>-->


<br><br><br><br>
<h2><b>Pet care advice regarding Covid-19</b></h2>
We recognise that there are questions around animal transmission of Coronavirus Covid-19. <b>The World Organisation for Animal Health</b> states that “The current spread of COVID-19 is as a result of human to human transmission. To date, there is no evidence that companion animals can spread the disease”.
<br>If a pet owner has been diagnosed with Covid-19, the <b>Centers for Disease Control and Prevention (CDC)</b> recommends that they restrict contact with pets as a precautionary animal health measure, until more information is known about the virus. If they must care for their pet while sick, it is recommended that owners wash their hands before and after any interaction with an animal and wear a facemask, just as a precaution.
<br>In the very unlikely event that a pet shows clinical signs, please do not take them to the vet; we advise calling your vet practice for further advice.
<br><b>Please do not visit the vet if you suspect that you have Covid-19 or may have been in contact with someone who has.</b><br><br> 



<div style="position:relative">  <img src="img/tip1.jpg" alt="tip1 style="position:relative; left:500px; top:590%"> </div> 
<!--<div style="position:relative"> <img src="tip2.jpg" alt="tip2" style="position:absolute; left:500px; top:590%"> </div>--> <!--left:500px; top:1200px  AND ALSO USE A DIV TAG TO MAKE SURE THAT THE IMAGE STAYS WITHIN A CERTAIN TOPIC ONLY--> 
<!--<img src="tip3.jpg" alt="tip3" style="position:absolute; left:500px; top:450% ; width:800px">
<img src="tip4.jpg" alt="tip4" style="position:absolute; left:600px; top:200% ; width:500px; height:700px" > -->

<h2><b>Pet care tips</b></h2>

<?php
//session_start();

include('connection.php');


$_SESSION['animals']= "general";

if($_SESSION['animals']=="general")
{

$query = "SELECT * FROM tips WHERE animals='general' ;";

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));




if (mysqli_num_rows($result) > 0)
   {
    
  echo"<h4><div style='position:relative'> <img src='img/tip4.jpg' alt='tip4' border='2' style='position:absolute; left:800px; top:450% ; width:45%' > <u><i>General:</i></u></div></h4> <ul>";
  
     while($row = mysqli_fetch_array($result))
     {
        echo "<li><div id='myDIV'><pre><p style='font-family:ariel; font-size:15px' >".$row['description']."</p></pre></div>";
           
               
             
                 
                if($_SESSION['role']=="admin")
                {
                    
                    echo"<a href='delete_tips.php?id=".$row['tip_id']."'>DELETE</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    
                    <a href='update_tips.php?id=".$row['tip_id']."'>UPDATE</a></br>";
                       
                    
                    
                }
        echo "</li></br>";
   
   }
       echo"</ul>";
   
   
          if($_SESSION['role']=="admin") 
              {
                echo"<form action='add_tips.php'>
                &nbsp &nbsp &nbsp &nbsp &nbsp <input type='submit' value='ADD' name='general' id='si'/>  
                </form></br>";
              }
   }


}




//echo "<div><img src='tip2.jpg' alt='tip2' style='position:absolute; left:500px; top:590%'>";


$_SESSION['animals']= "dog";

if($_SESSION['animals']=="dog")
{

$query = "SELECT * FROM tips WHERE animals='dog' ;";

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));




if (mysqli_num_rows($result) > 0)
   {
    
  echo"<div style='position:relative'> <img src='img/tip3.jpg' alt='tip3' border='2' style='position:absolute; left:800px; top:450% ; width:45%'><h4><u><i>Dogs:</i></u></h4></div> <ul>";
  
     while($row = mysqli_fetch_array($result))
     {
        echo "<li><div id='myDIV'><pre><p style='font-family:ariel; font-size:15px' >".$row['description']."</p></pre></div>";
           
               
             
                 
                if($_SESSION['role']=="admin")
                {
                    
                    echo"<a href='delete_tips.php?id=".$row['tip_id']."'>DELETE</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    
                    <a href='update_tips.php?id=".$row['tip_id']."'>UPDATE</a></br>";
                       
                    
                    
                }
        echo "</li></br>";
   
   }
       echo"</ul>";
   
   
          if($_SESSION['role']=="admin")
              {
                echo"<form action='add_tips.php'>
                &nbsp &nbsp &nbsp &nbsp &nbsp <input type='submit' value='ADD' name='dog' id='si'/>  
                </form></br>";
              }
              
              
   }
   

   
}
   



$_SESSION['animals']= "cat";

if($_SESSION['animals']=="cat")
{

$query = "SELECT * FROM tips WHERE animals='cat' ;";

$result = mysqli_query($connection, $query)
  or die ("Error in query: ".$query. " ".mysqli_error($connection));




if (mysqli_num_rows($result) > 0)
   {
    
  echo"<h4><div style='position:relative'><img src='img/tip2.jpg' alt='tip2' border='2' style='position:absolute; left:800px; top:450% ; width:45%'><u><i>Cats:</i></u></div></h4> <ul>";
  
     while($row = mysqli_fetch_array($result))
     {
        echo "<li><div id='myDIV'><pre><p style='font-family:ariel; font-size:15px' >".$row['description']."</p></pre></div>";
           
               
             
                 
                if($_SESSION['role']=="admin")
                {
                    
                    echo "<a href='delete_tips.php?id=".$row['tip_id']."'>DELETE</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp             
                    
                    <a href='update_tips.php?id=".$row['tip_id']."'>UPDATE</a></br>";
                       
                    
                    
                }
        echo "</li></br>";
   
   }
       echo"</ul>";
   
   
          if($_SESSION['role']=="admin") 
              {
                echo"<form action='add_tips.php'>
               &nbsp &nbsp &nbsp &nbsp &nbsp <input type='submit' value='ADD' name='cat' id='si'/>  
                </form></br>";
              }
   }


}




   
mysqli_close($connection);








?>




<!--echo"<h4><u><i>General:</i></u></h4>
<ul>

</ul>
<br>

<h4><u><i>Dogs:</i></u></h4>
<ul>

</ul><button type='button' id='dogs' onclick='add('dogs')'>ADD</button>
<br>
<h4><br><u><i>Cats:</i></u></h4>
<ul>


</ul><button type='button' id='cats' onclick='add('cats')'>ADD</button>
<br>
<h4><u><i>Rabbits:</u></i></h4>
<ul>

</ul><button type='button' id='rabbits' onclick='add('rabbits')'>ADD</button>
<br>
<h4><u><i>   :</i></u></h4>
<ul>


</ul>";*/ -->

        

