<!-- Data type  in php -->

<html>
<head>
    
    <title>Data type  in php</title>
</head>
<body>
    <h2>Integer</h2>
        <?php
           $a=50;
           $b=-150;
         echo "a=$a<br>";
         echo "b=$b";
         
         ?>
        
        <h2>Float</h2>
        <?php
          $a1=1.459;
           $b1=11.2e4;
         echo "a1=$a1<br>";
         echo "b1=$b1";
         ?>
         <h2>STRING</h2>
         <?php
         $a2="Hello";
          echo "a2=$a2" ;
          ?>
          <h2>Boolean</h2>
          <?php
               $a3=true;
               $b3=false;
            echo var_dump($a3)."<br>";
            echo var_dump($b3);
           ?>
          <h2>Array</h2>
         <?php
           $var= array(1,2,3,4);
          for($i=0;$i<count($var);$i++)
          {
            echo "index=$i value=$var[$i]";
            echo "<br>";
          }
          ?>
        
</body>
</html>        