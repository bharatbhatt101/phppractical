<!--Function with return value-->
<html>
<head>
    
    <title>Function with return value</title>
</head>
<body>
    <h2>Function with return value</h2>
        <?php
              function square($num)
              {
                  $cal_square=$num * $num;
                 echo "Area of square is: ";
                 
                 return $cal_square;       
                }   
             echo square(5);
                    
         ?>        
</body>
</html>