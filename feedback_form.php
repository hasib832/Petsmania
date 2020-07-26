<?php
session_start();
?>
<html>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script language="javascript">

function change1()
{
Header1.outerHTML="<span class='fa fa-star checked' ID='Header1' onclick='change1()' ></span>";
Header5.outerHTML="<span class='fa fa-star' ID='Header5' onclick='change5()'></span>";
Header4.outerHTML="<span class='fa fa-star' ID='Header4' onclick='change4()'></span>";
Header3.outerHTML="<span class='fa fa-star' ID='Header3' onclick='change3()'></span>";
Header2.outerHTML="<span class='fa fa-star' ID='Header2' onclick='change2()'></span>";
document.getElementsByName('star')[0].value=1;

}


function change2()
{
Header2.outerHTML="<span class='fa fa-star checked' ID='Header2' onclick='change2()'></span>";
Header1.outerHTML="<span class='fa fa-star checked' ID='Header1' onclick='change1()'></span>";
Header5.outerHTML="<span class='fa fa-star' ID='Header5' onclick='change5()'></span>";
Header4.outerHTML="<span class='fa fa-star' ID='Header4' onclick='change4()'></span>";
Header3.outerHTML="<span class='fa fa-star' ID='Header3' onclick='change3()'></span>";
document.getElementsByName('star')[0].value=2;
}

function change3()
{
Header3.outerHTML="<span class='fa fa-star checked' ID='Header3' onclick='change3()'></span>";
Header2.outerHTML="<span class='fa fa-star checked' ID='Header2' onclick='change2()'></span>";
Header1.outerHTML="<span class='fa fa-star checked' ID='Header1' onclick='change1()'></span>";
Header5.outerHTML="<span class='fa fa-star' ID='Header5' onclick='change5()'></span>";
Header4.outerHTML="<span class='fa fa-star' ID='Header4' onclick='change4()'></span>";
document.getElementsByName('star')[0].value=3;

}

function change4()
{
Header4.outerHTML="<span class='fa fa-star checked' ID='Header4' onclick='change4()'></span>";
Header3.outerHTML="<span class='fa fa-star checked' ID='Header3' onclick='change3()'></span>";
Header2.outerHTML="<span class='fa fa-star checked' ID='Header2' onclick='change2()'></span>";
Header1.outerHTML="<span class='fa fa-star checked' ID='Header1' onclick='change1()'></span>";
Header5.outerHTML="<span class='fa fa-star' ID='Header5' onclick='change5()'></span>";
document.getElementsByName('star')[0].value=4;

}

function change5()
{
Header5.outerHTML="<span class='fa fa-star checked' ID='Header5' onclick='change5()'></span>";
Header4.outerHTML="<span class='fa fa-star checked' ID='Header4' onclick='change4()'></span>";
Header3.outerHTML="<span class='fa fa-star checked' ID='Header3' onclick='change3()'></span>";
Header2.outerHTML="<span class='fa fa-star checked' ID='Header2' onclick='change2()'></span>";
Header1.outerHTML="<span class='fa fa-star checked' ID='Header1' onclick='change1()'></span>";
document.getElementsByName('star')[0].value=5;
}

</script>


<style>
.checked {
  color: orange;
}

   .formfield * {
  vertical-align: top;
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
    <br><br><br><br><br><br>

<h2>Star Rating</h2>
<span class="fa fa-star"  ID="Header1" onclick="change1()"></span>
<span class="fa fa-star"  ID="Header2" onclick="change2()"></span>
<span class="fa fa-star"  ID="Header3" onclick="change3()"></span>
<span class="fa fa-star"  ID="Header4" onclick="change4()"></span>
<span class="fa fa-star"  ID="Header5" onclick="change5()"></span>


<h1> FEEDBACK FORM </h1>
<p> <i> Is there anything you want us to know?</i> </p>
	
	<form action="feedback_info.php" method="post">
	<fieldset> <!--puts a box around-->
	<legend> <font color="red"> Public Information: </font> </legend>
	<b>Name</b>: <input type="text" name="uname" > <br><br>
	
        <p class='formfield'>    
        <label> <b>Comments:</b></label>
         
        <input type="hidden" name="star" />
        <textarea name="comment" cols="34" rows="4"> </textarea>       
        </p>
        <input type="submit" name="submit" value="Submit"/>
        
	</fieldset>
        </form>

<?php
/*session_start();

if(isset($_GET['submit']))
{$_SESSION['butto']= $_SESSION['star'];}
*/

?>





</body>
</html>