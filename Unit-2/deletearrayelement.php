<!--Deleting element from array in Php-->
<html>
<head>
    
    <title>Deleting element from array in Php</title>
</head>
<body>
    <h2>Deleting element from an array</h2>
        <?php
              
              
            $cars=array(0=>"Suzuki Dzire",1=>"Hyundai Verna",2=>"Honda City");
            print_r($cars);
            unset($cars[1]);//delete second element
            echo "<br>";
            print_r($cars);
              
         ?>        
</body>
</html>