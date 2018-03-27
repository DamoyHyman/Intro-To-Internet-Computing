<?php
    // Connect to the database
    require_once("config.php");
    
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
     
     try
     {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname']; 
        $username = $_POST['uname'];
        $password = $_POST['psw'];
        $birth = $_POST['birth'];
        $ssn = $_POST['SSN']; 
         
        
         // SQL script for user login
         $query = "INSERT INTO Members VALUES(:memID, :firstname, :lastname, :birthday, :ssn, :username, :password)"; 
         $statement = $conn->prepare($query);
         $statement->execute(array('memID' => null, 
                                   'firstname' =>$firstname, 
                                   'lastname' => $lastname, 
                                   'birthday' => $birth, 
                                   'ssn' => $ssn, 
                                   'username' => $username, 
                                   'password' => $password
                             )
                       ); 
    
         
        $count = $statement->rowCount();
         
         if($count == 1)
         {
            echo '<script type="text/javascript">' .'alert("Accout Successfully Created.");' .'</script>';
            // Disconnect from database
            $conn = null;  
            header("location: index.php");
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
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/form.css">
    <script type= "text/javascript" src="js/Js.js"></script>
    </head>
<body>
  
<h2>Sign Up Form</h2>

<form action=" " method="post">
  <div class="imgcontainer">
    <img src="img/padlock.png" alt="Avatar" class="avatar" width="50px">
  </div>

  <div class="container">
    <label><b>Fisrt Name</b></label>
    <input type="text" placeholder="Enter Your First Name" name="fname" required>
      
    <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter Your Last Name" name="lname" required>
      
    <label><b>Birthday</b></label>
    <input type="text" placeholder="YYYY-MM-DD" name="birth" required>
      
    <label><b>SSN</b></label>
    <input type="text" placeholder="Enter Social Security Number" name="SSN"  maxlength="9" required>
      
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
      
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Create Account</button>
  </div>
     

  <!--div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='http://www.google.com'">Not a Member? Sign Up</button>
    <span class="psw"> Forgot <a href="#"> Password? </a> </span>
    <span class="psw"> Forgot<a href="#"> Username?</a> </span>
  </div-->
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
