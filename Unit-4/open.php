<!--File Handling in PHP-->
<html>
<head>
    <title>File Handling</title>
    
</head>

<body>
    <h2>Open a file using fopen() function</h2>
     
    <?php
           $file_handle=fopen("hello.txt","r");
           if($file_handle)
           {
                 echo  "File open successfully";
           }
           else
           {
              echo "Error";
           }
           
    ?>
    
</body>
</html>