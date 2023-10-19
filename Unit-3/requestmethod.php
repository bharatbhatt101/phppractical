<!--Super global variable in Php-->
<html>
<head>
    <title>Super global variable in Php</title>
</head>

<body>
    <h2>Request method in PHP</h2>
    <form method="post">
        Enter your  name:<br>
        <input type="text" name="fname"><br><br>
        Enter your email:<br>
        <input type="email" name="mail"><br><br>
        
     <input type="submit" value="Submit">
    </form>
    <h2>Details</h2>
     
    <?php
        echo "Name:".$_REQUEST["fname"]."<br>";
        echo "E-mail:".$_REQUEST["mail"]."<br>";

    ?>
    


</body>
</html>
        

    
        




