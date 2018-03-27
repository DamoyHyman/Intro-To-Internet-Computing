<?php
class MyFiles
{
    function read($filename, &$myFile)
    {
        if (file_exists($filename))
            {
                $myFile = fopen($filename, "r"); // open file for reading
                    
                 if (!$myFile)
                 {
                    throw new Exception('File open failed.');  // Error opening file
                 }
                 else
                 {
                    echo 'File opended for reading successfully. ';
                    echo 'The file contain the following information:';
                    echo "<br>";
                    
                     while(!feof($myFile))
                    {
                        echo fgets($myFile) . "<br>";
                    }
                    fclose($myFile);
                 }
            }        
                else
                {
                    throw new Exception("File does not exsits");
                }
    }
    
   
    function append($firstname, $lastname)
    {
         if (file_exists("lostBoys.txt"))
            {
                $myFile = fopen("lostBoys.txt", "a"); // open file for appending
                    
                 if (!$myFile)
                 {
                    throw new Exception('File open failed.');  // Error opening file
                 }
                 else
                 {
                     if ($firstname == null || $lastname == null)
                     {
                         throw new Exception('Both first name and last name must be filled out to append to the file'); // Error empty values
                     }
                     else
                     {
                        echo 'File opended successfully for appending. ';
                        fwrite($myFile, $firstname);
                        fwrite($myFile, " " .$lastname."\n");
                        fclose($myFile);
                     }
                 }
             }        
                else
                {
                    throw new Exception("File does not exsits");
                }
    }
    
    function overwrite($firstname, $lastname) 
    {
         if (file_exists("lostBoys.txt"))
            {
                     if ($firstname == null || $lastname == null)
                     {
                         throw new Exception('Both first name and last name must be filled out to over the file'); // Error empty values
                     }
                     
                     else
                     {
                        $myFile = fopen("lostBoys.txt", "w"); //open file for overwriting
                         
                         if (!$myFile)
                         {
                             throw new Exception('File open failed.');  // Error opening file
                         }
                         
                         else
                         {
                            echo 'File opended successfully for appending. ';
                            fwrite($myFile, $firstname);
                            fwrite($myFile, " " .$lastname."\n");
                            fclose($myFile);
                         }
                     }
                 }
                     
                else
                {
                    throw new Exception("File does not exsits");
                }
    }
    
    
    function write($firstname, $lastname, &$myfile)
    {
        if (file_exists($myfile))
          {
                throw new Exception("File already exsits");
          }
        
        else
        {
            if ($myfile != null)
            {
                $myFile = fopen($myfile, "x"); // open file for writing
                
                if (!$myFile)
                 {
                    throw new Exception('File open failed.');  // Error opening file
                 }
                 else
                 {
                     if ($firstname == null || $lastname == null)
                     {
                         throw new Exception('Both first name and last name must be filled out to write to the file'); // Error empty values
                     }
                     else
                     {
                        echo 'File opended successfully for writing. ';
                        fwrite($myFile, $firstname);
                        fwrite($myFile, " " .$lastname."\n");
                        fclose($myFile);
                     }
                 }
            }
                else
                {
                    throw new Exception('Please provide a filename');  // Error opening file
                }
                    
        }
    }
    
    
}

?>