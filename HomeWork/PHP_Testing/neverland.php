<!DOCTYPE HTML>
<html>
    <body>
        <!--$_GET Method use on the server-->
   Your name is
        <?php echo $_GET["fname"]?>
        <?php echo $_GET["lname"]?>
        
        <!--$_POST Method use on the server-->
        Your name is
        <?php echo $_POST["fname"]?>
        <?php echo $_POST["lname"]?>
        
    </body>
</html>