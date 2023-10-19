<!--Insert a record into table-->
<html>
<head>
    <title>Insert a record into table</title>
</head>

<body>
    <h2>Insert a Record</h2>
     
    <?php
        
        $CONNECTION=mysqli_connect("localhost","root","obeygod","base6");
        if(!$CONNECTION)
        {
            die("Couldn't connect to server");
        }
        echo "Connected Successfully<br><br>";
         
        $sql_query="INSERT INTO Stud(Roll,Stu_name)
        values(5,'Sam')";
        $sql_query1="INSERT INTO Stud(Roll,Stu_name)
        values(10,'Papu')";
        mysqli_query($CONNECTION,$sql_query);
        mysqli_query($CONNECTION,$sql_query1);
        mysqli_close($CONNECTION);
        if(!$sql_query)
        {
            die("Couldn't connect to server");
        }
        echo "Data Inserted<br>";
    ?>
    


</body>
</html>
        

    
        




