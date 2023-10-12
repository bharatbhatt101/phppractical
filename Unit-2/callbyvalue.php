<!--Call by value Example-->
<html>
<head>
    
    <title>Call by value Example</title>
</head>
<body>
    <h2>Call by value Example</h2>
        <?php
              $var=20;
              echo "The value inside the function is ".callbyvalue($var)."<br>";
              function callbyvalue($x)
              {
                 $x=$x+10;
                 return($x);
              }
               echo "The value outside the function is $var";     
         ?>        
</body>
</html>