<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Overwriting Page</title>
    <link rel="stylesheet" href="css/mystyle.css">
    </head>
    
    <body>
    <div class="grid center">
        <header><h4><em>Writing Page</em></h4></header>
        <div>
        <a href="index.html"><button>Back Home</button></a>
        <br>    
    <?php 
       require_once('MyFilesClass.php');
       $Write = new MyFiles;
    
        try
        {
            $myFile = null;
            $Write->write($_POST["fname"],$_POST["lname"], $_POST["filename"]);
            $Write->read($_POST["filename"], $myFile);
           
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