<!--PHP Operators-->
<html>
<head>
    
    <title>PHP Operators</title>
</head>
<body>
    <h2>Arithmetic Operators</h2>
        <?php
               $a=20;
               $b=5;

               echo "Sum: $a+$b=".$a+$b;
               echo "<br>";
               echo "Sub: $a-$b =".$a-$b;
               echo "<br>";
                echo "Multiply: $a*$b =".$a*$b;
               echo "<br>";
                echo "Divide: $a/$b =".$a/$b;
         ?>
        <h2>Logical Operators</h2>
        <?php
               $var=false;
               $var1=true;

               echo var_dump($var&&$var1);
               echo "<br>";

               echo var_dump($var||$var1);
         ?>
         <h2>Comparision Operators</h2>
         <?php
                  $c=40;
                  $d=20;
                  
                  echo "$c==$b:";
                  echo var_dump($c==$d)."<br>";
                  echo "$c!=$b:";
                                    
                  echo var_dump($c!=$d)."<br>";
                  echo "$c<$b:";
                  
                  echo var_dump($c<$d)."<br>";
                  echo "$c>$b:";
                  
                  echo var_dump($c>$d)."<br>";
              ?>
          
</body>
</html>        