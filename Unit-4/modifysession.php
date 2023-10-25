<!--Modify Session-->
<html>
<head>
    <title>Modify Session</title>
    
</head>

<body>
    <h2>MODIFY SESSION</h2>
     
    <?php

      session_start();
      $_SESSION["username"]="Bharat";

        echo "Session information set Successfully.<br>";
        
        
        
    ?>
    
    <a href="session.php"><b>Visit next page</b></a>

</body>
</html>