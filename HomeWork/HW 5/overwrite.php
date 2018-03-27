<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Overwriting Page</title>
    <link rel="stylesheet" href="css/mystyle.css">
    </head>
    
    <body>
    <div class="grid center">
        <header><h4><em>Overwriting Page</em></h4></header>
        <div>
        <a href="index.html"><button>Back Home</button></a>
        <br>    
    <?php 
       require_once('MyFilesClass.php');
       $Append = new MyFiles;
    
        try
        {
            $myFile = null;
            $Append->overwrite($_POST["fname"],$_POST["lname"]);
            $Append->read("lostBoys.txt", $myFile);
           
        }
        catch (Exception $e)
        {
            echo 'Message: ' .$e->getMessage();
        }
    ?>
        </div>
    </div>
    
    
    
    </body>
</html>