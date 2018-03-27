<?php
    // Connect to the database
    include("config.php");
    
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
     // Add to placev visited.
     if (isset($_POST['Login and Add']))
     {
   
         try
         {
            $username = $_POST['uname'];
            $password = $_POST['psw'];
        
            // SQL script for user login
            $query = "SELECT * FROM Members WHERE Username = :username AND Password = :password"; 
            $statement = $conn->prepare($query);
            $statement->execute(array('username' => $username, 'password' => $password));
            $count = $statement->rowCount();
             
            $statement->fetch();
            $memberID = $statement["Mem_ID"];
        
                if ($count == 1)
                {
                    //Now add to place visited
                    $query = "INSERT INTO UserPlace VALUES(:user_ID, :city, :state, :country)";
                    $statement = $conn->prepare($query);
                    $statement->execute(array('user_ID' => $memberID, 
                                              'city' => $_POST['city'], 
                                              'state' => $_POST['state'], 
                                              'country' => $_POST['country']
                                              )
                                       ); 
                    
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
     
    
 }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Work 6</title>
    <link rel="stylesheet" href="css/form.css">
    <script type= "text/javascript" src="js/Js.js"></script>
    </head>
<body>
  
<h2>Place Visited</h2>

<form action=" " method="post">
  <div class="imgcontainer">
    <img src="img/places.jpg" alt="Avatar" class="avatar" width="50px">
  </div>

  <div class="container">
      <p>Please enter the required information to add to the places that you have visited. Then press the <b>"Login and Add"</b> button to add to previous visited places OR to print place visited, enter your username and password, then press the the <b>"Print Visited Places"</b> button.</p>
    <label><b>City:</b></label>
    <input type="text" placeholder="Enter city" name="city">

    <label><b>State:</b></label>
    <input type="text" placeholder="Enter state" name="state">
      
    <label><b>Country:</b></label>
    <input type="text" placeholder="Enter country" name="country">
      
        <!-- Login required to add place visited -->
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
      
    <button type="submit" name="Login and Add">Login and Add</button>
    
  </div> 
</form>
    
    <form action="print.php" method="post">
        <div class="container">
            <!-- Login required to add place visited -->
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
      
        <button type="submit" name="Print Visited Places" >Print Visited Places</button>
        </div>
    </form>
    
     <div id="timer">
         <p>The Date Is: 
        <?php
            $msg = date('d/m/Y h:i:s');
            echo $msg;
        ?></p>
    </div>
    
    
    
</body>
</html>
