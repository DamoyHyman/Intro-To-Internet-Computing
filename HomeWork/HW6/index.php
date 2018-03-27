<?php
    // Connect to the database
    include("config.php");
    
 if ($_SERVER["REQUEST_METHOD"] == "POST")
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
         
         // Disconnect from database
        $conn = null;
         
        
        if ($count == 1)
        {
            header("location: userplace.php");
        }
         
         else 
        {
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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Work 6</title>
    <link rel="stylesheet" href="css/form.css">
    <script type= "text/javascript" src="js/Js.js"></script>
    </head>
<body>
  
<h2>Login</h2>

<form action=" " method="post">
  <div class="imgcontainer">
    <img src="img/padlock.png" alt="Avatar" class="avatar" width="50px">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>
     

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='signup.php'">Not a Member? Sign Up</button>
    <span class="psw"> Forgot <a href="#"> Password? </a> </span>
    <span class="psw"> Forgot<a href="#"> Username?</a> </span>
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
