<!--Create A Cookie-->
<html>
<head>
    <title>Create A Cookie</title>
    <?php
        
         setcookie("name","Bharat",time()+3600,"/","",0);
         setcookie("roll","7101",time()+3600,"/","",0);
        
    ?>
</head>

<body>
    <h2>CREATE A COOKIE</h2>
     
    <?php
        echo "The cookie is set for next <b>1</b> Hour<br><br>";
        echo "Name of Student is:".$_COOKIE["name"]."<br>";
        echo "Student's Rollno. is:".$_COOKIE["roll"];
        
        
    ?>
    


</body>
</html>
        

    
        




