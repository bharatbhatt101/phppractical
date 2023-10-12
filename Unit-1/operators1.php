<!--PHP Operators-->
<html>
<head>
    
    <title>PHP Operators</title>
</head>
<body>
    <h2>String Operators</h2>
        <?php
               $a="Hello_";
               $b="World";

               echo "Concatenation:".$a.$b;//Concatenation
               echo "<br><br>";
               echo "Append:".$a.=$b;//Append
         ?>

        
        <h2>Array Operators</h2>
        <?php
               $var=array("a"=>"BCA",b""=>"BBA");
               $var1=array("c"=>"B.COM","d"=>"BSc");

               print_r($var + $var1);//Union
               echo "<br><br>";

               echo var_dump($var==$var1);//Equality


         ?>
         
         <h2>Operator Precedence</h2>
         <?php
                  
                  echo "4+8*5=". 4 + 8 * 5,"<br>";
                  echo "(2+8)*6=". (2 + 8) * 6,"<br>";

          ?>

        
         
</body>
</html>     
 
        
         

         
        
         
        
         

     
        