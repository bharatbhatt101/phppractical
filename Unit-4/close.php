<!--File Handling in PHP-->
<html>
<head>
    <title>File Handling in PHP</title>
    
</head>

<body>
    <h2>Close a file using fclose() function</h2>
     
    <?php

echo "<b>Content in file:</b><br><br>";
$file_handle=fopen("hello.txt","r");
while(!feof($file_handle))
{
   echo fgets($file_handle);
}
fclose($file_handle);

    echo "<br><br>File close successfully!";



        
    ?>
</body>
</html>