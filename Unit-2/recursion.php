<!--Recursion in PHP-->
<html>
<head>
    
    <title>Recursion in PHP</title>
</head>
<body>
    <h2>Calculate the factorial using recursion</h2>
        <?php
              $num=5;
              echo "Factorial of $num is ".fact($num);
              function fact($num)
              {
                if($num<=0)
                {

                    return 1;
                }
                else
                {
                    return $num * fact($num-1);
                }
                
              }

         ?>        
</body>
</html>