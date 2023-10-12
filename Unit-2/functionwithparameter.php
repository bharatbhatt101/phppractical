<!--PHP Function with Parameters-->
<html>
<head>
    
    <title>PHP Function with Parameters</title>
</head>
<body>
    <h2>PHP Function with Parameters</h2>
        <?php
              function getSum($num1,$num2)
              {
                $sum=$num1+$num2;
                 echo "Sum of two number is : $sum";
              }             
              getSum(400,250);      
         ?>        
</body>
</html>