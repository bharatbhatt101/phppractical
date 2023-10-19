<!--Creating a Table-->
<html>
<head>
    <title>Creating a Table</title>
</head>

<body>
    <h2>Creating a Table</h2>
     
    <?php
        
        $CONNECTION=mysqli_connect("localhost","root","obeygod","base6");
        if(!$CONNECTION)
        {
            die("Couldn't connect to server");
        }
        echo "Connected Successfully<br><br>";
         
        $sql_query="CREATE TABLE Stud(
            Roll int primary key,
            Stu_name varchar(20))";
        mysqli_query($CONNECTION,$sql_query);
        mysqli_close($CONNECTION);
        if(!$sql_query)
        {
            die("Couldn't connect to server");
        }
        echo "Table created<br>";
    ?>
    


</body>
</html>
        

    
        




