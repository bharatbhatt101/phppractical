<!--Call by reference Example-->
<html>
<head>
    
    <title>Call by reference Example</title>
</head>
<body>
    <h2>Call by reference Example</h2>
        <?php
              $var=20;
              echo "The value inside the function is ".callbyreference($var)."<br>";
              function callbyreference(&$x)
              {
                 $x=$x+10;
                 return($x);
              }
               echo "The value outside the function is $var";     
         ?>        
</body>
</html>