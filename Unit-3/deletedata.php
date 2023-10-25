<!--Delete data using PHP-->
<html>
<head>
    <title>Delete data using PHP</title>
</head>

<body>
    <h2>Deleting Records</h2>
     
    <?php
        
        $CONNECTION=mysqli_connect("localhost","root","obeygod","detalis");
        if(!$CONNECTION)
        {
            die("Couldn't connect to server");
        }
        echo "Connected Successfully<br><br>";
         
        $sql_query="DELETE FROM  student where Roll_no=5";
        mysqli_query($CONNECTION,$sql_query);
        mysqli_close($CONNECTION);
        if(!$sql_query)
        {
            die("Couldn't connect to server");
        }
        echo "Record deleted Successfully<br>";
    ?>
    


</body>
</html>