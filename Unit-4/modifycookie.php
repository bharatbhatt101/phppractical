<!--Modify A Cookie Value-->
<html>
<head>
    <title>Modify A Cookie Value</title>
    <?php
        
        $cookie_name="message";
        $cookie_value="Hello World";

        setcookie($cookie_name,$cookie_value,time()+60*60*24*30);
        
    ?>
</head>

<body>
    <h2>MODIFY COOKIE</h2>
     
    <?php

     if(isset($_COOKIE[$cookie_name]))
     {

         echo "Cookie $cookie_name is set.<br>";
         echo "Cookie value is $_COOKIE[$cookie_name]";
    }
    else
    {
        echo "Cookie $cookie_name is not set.<br>";

    }
        
    ?>
    


</body>
</html>