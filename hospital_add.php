<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		<style>
		#sbutton
		{
		width:10em; 
		height:3em;
		}
		</style>
    </head>
    <body>
        <h1 align="center"> Fill in the details of the hospital to ADD to the hospital page.</h1>
        
        <form action="add_hosp.php" method="post">
            <table align=center>
            <tr><td align="center" style="font-family:'Arial'; font-size:15px">Hospital Name:</td></tr> <tr><td align="left"><input type="text" name="Hname"/></td></tr>
			<tr></tr>
            <tr><td align="center" style="font-family:'Arial'; font-size:15px">Address:</td></tr> <tr><td align="left"><input type="text" name="address"/></td></tr>
			<tr></tr>
            <!-- Hours: <textarea name="textarea" cols="24" rows="2"> </textarea><br> -->
            <tr><td align="center" style="font-family:'Arial'; font-size:15px">Contact:</td></tr> <tr><td align="left"><input type="text" name="contact"/></td></tr>
			<tr></tr>
			<br>
			
            <tr><td align="center" colspan=2><input type="submit" name="Hsub" value="Submit" id="sbutton"/></td></tr>
            </table>
        </form>
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
