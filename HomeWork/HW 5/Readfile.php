<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>File Reading Page</title>
    <link rel="stylesheet" href="css/mystyle.css">
    </head>
    
    <body>

    <div class="grid center">
        <header><h4><em>File Reading Page</em></h4></header>
        <div>
        <a href="index.html"><button>Back Home</button></a>
        <br>    
    <?php 
       require_once('MyFilesClass.php');
       $Read = new MyFiles;
    
        try
        {
            $myFile = null;
            $Read->read($_POST["filename"],$myFile);
           
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