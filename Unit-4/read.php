<!--File Handling in PHP-->
<html>
<head>
    <title>File Handling</title>
    
</head>

<body>
    <h2>Reading a text from a file using fgets() function</h2>
     
    <?php
         echo "<b>Content in file:</b><br><br>";
         $file_handle=fopen("hello.txt","r");
        while(!feof($file_handle))
        {
            echo fgets($file_handle);
        }
    ?>
</body>
</html>