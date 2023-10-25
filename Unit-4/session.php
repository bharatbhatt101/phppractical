<!--Modify Session-->
<html>
<head>
    <title>Modify Session</title>
    
</head>

<body>
    <h2>After visit next page:</h2>
     
    <?php

      session_start();


        echo "<h2>Welcome user:</h2>".$_SESSION["username"];
        
        
        
    ?>
    
</body>
</html>