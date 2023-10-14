<!--Types of Array in Php-->
<html>
<head>
    
    <title>Types of Array in Php</title>
</head>
<body>
    <h2>Indexed array</h2>
        <?php
              
              
            $var=array("Volovo","BMW","Toyota");
            for($i=0;$i<count($var);$i++)
              {

                  echo "Value at index [$i] is ". $var[$i]. "<br>";
              }
                
         ?>        
</body>
</html>