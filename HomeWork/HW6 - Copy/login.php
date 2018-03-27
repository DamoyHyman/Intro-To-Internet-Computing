<?php
   session_start();

    // Check condittions
    if (!isset($_SESSION['Username']) && !isset($_SESSION['Mem_ID']))
    {
        // Jump back to login page
        echo '<script type= "text/javascript">' .'alert("You are not logged in");' ."</script>";
        header("location: index.php");
    }
    
    else
    {
        echo "<h5><b>Welcome:<b> " .$_SESSION['Username'] ."!" ."</h5>";
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
  <button type="button" class="cancelbtn" onclick="location.href='logout.php'" style="float: right">Logout</button><br>
    
<h2>Place Visited</h2>

<form action="addplace.php" method="post">
  <div class="imgcontainer">
    <img src="img/places.jpg" alt="Avatar" class="avatar" width="50px">
  </div>

  <div class="container">
      <p>Please enter the required information to add to the places that you have visited. Then press the <b>"Login and Add"</b> button to add to previous visited places OR to print place visited, enter your username and password, then press the the <b>"Print Visited Places"</b> button.</p>
    <label><b>City:</b></label>
    <input type="text" placeholder="Enter city" name="city" required>

    <label><b>State:</b></label>
    <input type="text" placeholder="Enter state" name="state" required>
      
    <label><b>Country:</b></label>
    <input type="text" placeholder="Enter country" name="country" required>
      
    <button type="submit" name="Add Place Visited" >Add Place Visited</button>
  </div> 
</form>
    
    <h2>Print Place Visited</h2>
    <form action="print.php" method="post">
        <div class="container">
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
