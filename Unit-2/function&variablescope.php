<!--Function and Variable scope-->
<html>
<head>
    
    <title>Function and Variable scope</title>
</head>
<body>
    <h2>Function and Variable scope</h2>
        <?php
              $x=10;
              function value()
              {
                 $x=20;
               echo "The value of x  inside the function is: $x <br>";
              }
              value();
               echo "The value of x outside the function is: $x";     
         ?>        
</body>
</html>