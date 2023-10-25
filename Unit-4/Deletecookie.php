<!--Delete A Cookie-->
<html>
<head>
    <title>Delete A Cookie</title>
    <?php
        
         setcookie("name","Bharat",time()-3600,"/","",0);
         setcookie("roll","7101",time()-3600,"/","",0);
        
    ?>
</head>

<body>
    <h2>DELETE A COOKIE</h2>
     
    <?php
        echo "Cookie deleted Successfully!";
        
        
        
    ?>
    


</body>
</html>