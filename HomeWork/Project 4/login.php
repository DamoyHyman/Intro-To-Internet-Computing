<?php
     // Start session
     session_start();

 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
      // Connect to the database
    include("config.php");
     
     try
     {
        $username = $_POST['uname'];
        $password = $_POST['psw'];
        
        // SQL script for user login
        $query = "SELECT * FROM Members WHERE Username = :username AND Password = :password"; 
        $statement = $conn->prepare($query);
        $statement->execute(array('username' => $username, 'password' => $password)); 
        $count = $statement->rowCount();
         
        $result = $statement->fetchAll();
                    
            for ($i = 0; $i < count($result); $i++)
            {
                $row = $result[$i];
                $memberID = $row["Mem_ID"];
            }
         
         // Disconnect from database
        $conn = null;
         
        
        if ($count == 1)
        { 
            // Save user session
            $_SESSION['Username'] = $username;
            $_SESSION['Mem_ID'] = $memberID;
            header("location: index.php");
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110491194-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110491194-1');
    </script>

    <meta charset="utf-8">
    <title>GearHead Login</title>
    <link rel="stylesheet" href="css/form.css">
    <script type= "text/javascript" src="js/Js.js"></script>
    </head>
<body>
  
<h2>Login</h2>

   
        
<form action="" method="post">
  <div class="imgcontainer">
    <img src="myimg/login.png" alt="Avatar" class="avatar" width="50px">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked=""> Remember me
  </div>
     

  <div class="container" style="background-color:red">
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
