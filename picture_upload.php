<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>picture uploading</title>
    </head>
    <body>
        

        <h1> THIS IS FOR UPLOADING A PICTURE </h1>


<form action="upload.php" method="POST" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file" >
    <button type="submit" name="submit"> UPLOAD </button>
</form>



        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
