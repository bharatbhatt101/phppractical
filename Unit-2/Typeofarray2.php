<!--Types of Array in Php-->
<html>
<head>
    
    <title>Types of Array in Php</title>
</head>
<body>
    <h2>Multidimensional Array</h2>
        <?php
              
            $var=array(array(1,2,3),array(4,5,6),array(7,8,9));
            echo "3 by 3 Matrix:<br>";
            for($i=0; $i<count($var);$i++)
              {
                 echo "<br><br><br>";
                 for($j=0;$j<count($var);$j++)
                  {
                      
                      echo "index[$i][$j] =".$var[$i][$j];
                      echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                       
                  }
              }
                
         ?>        
</body>
</html>