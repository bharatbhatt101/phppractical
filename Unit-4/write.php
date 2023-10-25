<!--File Handling in PHP-->
<html>
<head>
    <title>File Handling in PHP</title>
    
</head>

<body>
    <h2>Writing into a file by using fwrite() function</h2>
     
    <?php
        


        echo "<b>Content in file:</b><br><br>";
         $file_handle=fopen("hello.txt","w");
         echo fwrite($file_handle,"Welcome to PHP programming.<br>Hello world.<br>Lets write Something");
         fclose($file_handle);
      
        
        
        
    ?>
</body>
</html>