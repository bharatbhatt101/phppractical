<!--String Functions in Php-->
<html>
<head>
    
    <title>String Functions</title>
</head>
<body>
   <?php
 
    echo "<h2>Strrev() function</h2><br>";
    
    echo "The reverse of the string <b>HELLO</b> is ";
    echo strrev("HELLO");
    echo "<h2>Strlen() function</h2><br>";
    
    echo "The length of the string <b>HELLO</b> is ";
    echo strlen("HELLO");
    echo "<h2>Strpos() function</h2><br>";
    
    echo strpos("Welcome to php programming","php");
    
    echo "<h2>Str_repeat() function</h2><br>";
    echo "Statement print three times:<br>";
    echo str_repeat("Hello<br>",3);

    echo "<h2>Str_replace() function</h2><br>";
    $text="Hello World";
    echo "Before replacement:<br>";
     echo "$text<br>";
    echo "After replacement:<br>";
    echo str_replace("Hello","Bye",$text);
    ?>       
</body>
</html>