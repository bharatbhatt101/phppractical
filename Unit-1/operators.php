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

          <h2>Assignment Operators</h2>
          <?php
              
              $x=10;
              $y=20;
              $z=15;
              $m=25;
                 
              echo "x:$x <br>";
              echo "x+=4:".$x+=4;
              echo "<br>y:$y <br>";
              echo "y-=1:".$y-=1;
              echo "<br>z:$z <br>";
              echo "z*=4:".$z*=5;
              echo "<br>m:$m <br>";
              echo "m/=5:".$m/=5;
        ?>

        <h2>Increment/Decrement Operators</h2>
         <?php
                $i=10;
                $j=15;
                $k=20;
                $l=25;
                 echo "Original:".$i;            
                echo " Pre-increment:".++$i;
                echo "<br>";   
                 echo "Original:".$j;
                echo " Post-increment:".$j++;
                echo "<br>";
                 echo "Original:".$k;
                echo " Pre-decrement:".--$k;
                echo "<br>";
                 echo "Original:".$l;                
                echo " Post-decrement:".$l--;
            
           
          ?>
        
         
</body>
</html>     
 
        
         

         
        
         
        
         

     
        