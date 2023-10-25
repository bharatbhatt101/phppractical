<!--Connecting to the database server-->
<html>
<head>
    <title>Connect Database</title>
</head>

<body>
    <h2>Connecting Database</h2>
     
    <?php
        
        $CONNECTION=mysqli_connect("localhost","root","obeygod");
        if(!$CONNECTION)
        {
            die("Couldn't connect to server");
        }
        echo "Connected Successfully.";

    ?>
    


</body>
</html>
        

    
        




