<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Place</title>
    <link rel="stylesheet" href="css/form.css">
    <script type= "text/javascript" src="js/Js.js"></script>
    </head>
<body>

<?php
    require_once("config.php");
    
    if (!empty($_SESSION['Username']) && !empty($_SESSION['Mem_ID']))
    {
        echo "<h6>Now adding Place Visited.......</h6>";

        //Now add to place visited
        $query = "INSERT INTO UserPlace VALUES(:user_ID, :city, :state, :country)";
        $statement = $conn->prepare($query);
        $statement->execute(array('user_ID' => $_SESSION['Mem_ID'], 
                                  'city' => $_POST['city'], 
                                  'state' => $_POST['state'], 
                                  'country' => $_POST['country']
                                  )
                           ); 
        
        // Disconnect from database
        $conn = null;
        
        //Redirect back to login
        header('Refresh: 2; URL = login.php');
    }

    else
    {
        // Disconnect from database
        $conn = null;
        echo "<h6>Cannot add to Place Visited. You are not logged in.......</h6>";
        //Redirect back to login
        header('Refresh: 2; URL = login.php');
        
    }
    
?>
    <div id="timer">
         <p>The Date Is: 
        <?php
            $msg = date('d/m/Y h:i:s');
            echo $msg;
        ?></p>
        
    </div>
    
    </body>
</html>