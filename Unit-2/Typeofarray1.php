<!--Types of Array in Php-->
<html>
<head>
    
    <title>Types of Array in Php</title>
</head>
<body>
    <h2>Associative Array</h2>
        <?php
              
            $var=array("Peter"=>35,"Ben"=>37,"Joe"=>43);
            foreach($var as $key=> $value)
              {

                  echo "Key=".$key." , Value".$value ." <br>";
              }
                
         ?>        
</body>
</html>