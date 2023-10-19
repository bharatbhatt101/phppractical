<!--WORKING WITH SESSION-->
<html>
<head>
    <title>WORKING WITH SESSION</title>
    
</head>

<body>
    <h2>WORKING WITH SESSION</h2>
     
    <?php
        session_start();
        if(isset($_SESSION['counter']))
        {
            $_SESSION['counter']+=1;
        }
        else
         {
            $_SESSION['counter']=1;

         }
        echo "You have visited ".$_SESSION['counter'];
        echo " <b>time(s)</b> this page in current session";
        
        
    ?>
    


</body>
</html>
        

    
        




