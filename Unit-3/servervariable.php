<!--Super global variable in Php-->
<html>
<head>
    <title>Super Global Variables</title>
</head>
<body>
    <h2>Server variable in PHP</h2>
    <?php
        echo "File name is:";
        echo "<b>".$_SERVER["PHP_SELF"]."</b><br><br>";
        echo "Server name is:";
        echo "<b>".$_SERVER["SERVER_NAME"]."</b><br><br>";
        echo "Pathname of current script is:";
        echo "<b>".$_SERVER["SCRIPT_NAME"]."</b><br><br>";
        echo "Port on the  Server is:";
        echo "<b>".$_SERVER["SERVER_PORT"]."</b>";
    
        

    ?>

</body>
</html>
        

    
        




