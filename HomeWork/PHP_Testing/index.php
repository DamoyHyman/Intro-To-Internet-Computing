<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Test</title>
    </head>
    
    <body>
        
        <!-- PHP Code Begins -->
    <?php
        echo "Hello World!";
        echo "<br>";
        $x = 5;
        $y = 10;
        echo $x+100+$y;
        
        // Creating a class------------------
        class Student
        {
            function Student($name)
            {
                $this->name = $name;
            }
            
            function print()
            {
                echo $this->name;
            }
        }
        
        // Create an object
        $aStudent = new Student("Rynold");
        
        // Invoke a function
        echo "<br>";
        $aStudent->print();
        //----------------------------------------
        
        // Creating an Index array----------------
        echo "<br>";
        $animal = array("dog", "cat", "pig");
        $acount = count($animal);
        echo $acount;
        //----------------------------------------
        
        // Creating an Associative array-----------------------------------
        echo "<br>";
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43" ); /*OR $age["Peter"] = "35" $age["Ben"] = "37" */
        foreach($age as $x => $x_value)
        {
            echo "Key = " . $x . ", Value = " . $x_value;
            echo "<br>";
        }
        //------------------------------------------------------------------
        
        
        // Accessing Database------------------------------------------------
        
        
        //-------------------------------------------------------------------
        
        // Error Handling Useing Exceptions---------------------------------11/1/2017
        function openForRead($filename, &$myFile) // Create function with an exception 
        {
            if (file_exists($filename))
            {
                $myfile = fopen($filename, "r");
            }
            else
            {
                throw new Exception("File not found"); // Error opening file
            }
        }
        
            try // trigger exception in a try bock
            {
                $myFile = null;
                openForRead("lostBoys.txt", $myFile);
                echo 'File opended for reading successfully';
                fclose($myFile);
            }
            catch (Exception $e)
            {
                echo 'Message: ' .$e->getMessage();
            }
        
    ?>
        
        
        
        
        <!-- PHP Code Ends -->
        <br>
        <form action="neverland.php" method="post">
            First name:<br>
            <input type="text" name="fname" value="" placeholder="First name">
            <br>
            Last name:<br>
            <input type="text" name="lname" value="" placeholder="Last name">
            <br>
            <input type="submit" value="Submit">
        </form>
        
    </body>

</html>