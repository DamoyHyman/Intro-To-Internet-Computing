<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Work 5</title>
    </head>
    
    <body>
    <br>
        <header>Read File Section</header>
     <label>You can read From A file listed below:</label>
        <ul>
            <li>lostBoys.txt</li>
        </ul>
        
        <form action="Readfile.php" method="post">
           <input type="text" name="filename" placeholder="Type the exact name of a file listed above" size="33">
           <input type="submit" value="Submit">
        </form>
        
        <br>
        <header>Append File Section</header>
        <form action="appendfile.php" method="post">
            First name:<br>
            <input type="text" name="fname" value="" placeholder="First name">
            <br>
            Last name:<br>
            <input type="text" name="lname" value="" placeholder="Last name">
            <br><br>
            <input type="submit" value="Submit">
        </form>
        
    
    </body>
</html>