<!--Creating Database-->
<html>
<head>
    <title>Creating Database</title>
</head>

<body>
    <h2>Creating Database</h2>
     
    <?php
        
        $CONNECTION=mysqli_connect("localhost","root","obeygod");
        if(!$CONNECTION)
        {
            die("Couldn't connect to server");
        }
        echo "Connected Successfully<br><br>";
         
        $sql_query="CREATE DATABASE base6";
        mysqli_query($CONNECTION,$sql_query);
        mysqli_close($CONNECTION);
        if(!$sql_query)
        {
            die("Couldn't connect to server");
        }
        echo "Database created<br>";
    ?>
    


</body>
</html>
        

    
        




