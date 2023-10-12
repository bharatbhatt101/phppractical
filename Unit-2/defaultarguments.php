<!--Default Arguments-->
<html>
<head>
    
    <title>Default Arguments</title>
</head>
<body>
    <h2>Default Arguments</h2>
        <?php
              function area_circle($radius=4)
              {

                $area=3.14159 * $radius*$radius;
                 echo "Area of circle with radius $radius is $area<br>";
              }             
              area_circle(10);
              area_circle();//passing no value
              area_circle(6);      
         ?>        
</body>
</html>