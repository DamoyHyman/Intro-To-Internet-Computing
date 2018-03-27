<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Results</title>
    <link rel="stylesheet" href="css/form.css">
    <script type= "text/javascript" src="js/Js.js"></script>
    </head>
<body>
  
<h2>Result:</h2>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Connect to the database
        include("config.php");
    
        try {
                $username = $_POST['uname'];
                $password = $_POST['psw'];
        
                // SQL script for user login
                $query = "SELECT * FROM Members WHERE Username = :username AND Password = :password"; 
                $statement = $conn->prepare($query);
                $statement->execute(array('username' => $username, 'password' => $password));
                $count = $statement->rowCount();
        
                if ($count == 1)
                {
                    $result = $statement->fetchAll();
                    
                    for ($i = 0; $i < count($result); $i++)
                    {
                         $row = $result[$i];
                         $memberID = $row["Mem_ID"];
                    }
                    
                    $query = "SELECT City, State, Country FROM UserPlace WHERE Mem_ID = :mem_ID";
                    $statement = $conn->prepare($query);
                    $statement->execute(array('mem_ID' => $memberID));
                    $result = $statement->fetchAll();
                    
                    if(count($result)> 0)
                    {
                        echo '<table border="10" style="background-color: aqua; border-color: red blue gold teal;"><tr><th>City</th><th>State</th><th>Country</th></tr>';
                        
                        for ($i = 0; $i < count($result); $i++)
                        {
                            $row = $result[$i];
                            echo "<tr><td>" .$row["City"] ."</td><td>" .$row["State"] ."</td><td>" .$row["Country"] ."</td></tr>";
                        }
                        
                            echo "</table>";
                    }
                    
                    else
                    {
                        echo "0 results";
                    }
                    // Disconnect from database
                    $conn = null;
                }
         
                else 
                {
                    // Disconnect from database
                    $conn = null;
                    $error = "Your Login Name or Password is invalid";
                    echo '<div style = "font-size:11px; color:#cc0000; margin-top:20px">' .$error .'</div>';
                }
         }
        
        catch(PDOException $e)
         {
            echo $e->getMessage();
         }
    }
    
?>
    <br>
     <div class="container" style="background-color:#f1f1f1">
         <div class="center">
        <button type="button" class="cancelbtn" onclick="location.href='userplace.php'">Return</button>
             </div>
    </div>
    
      <div id="timer">
         <p>The Date Is: 
        <?php
            $msg = date('d/m/Y h:i:s');
            echo $msg;
        ?></p>
    </div>
    </body>
</html>