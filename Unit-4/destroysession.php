<!--Delete A Session-->
<html>
<head>
    <title>Delete A Session</title>
    
</head>

<body>
    <h2>DELETE A Session</h2>
     
    <?php

        session_start();

        session_unset();
        session_destroy();

        echo "All session variables aer now removed,and <b> the Session is Destroyed!</b>";
        
        
        
    ?>
    


</body>
</html>