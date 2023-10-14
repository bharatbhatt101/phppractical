<!--Accessing  Array Element in Php-->
<html>
<head>
    
    <title>Accessing  Array Element in Php</title>
</head>
<body>
    <h2>Using foreach loop in array</h2>
        <?php
              
            $fruit=array("Mango","Orange","Guava","Grapes");
            foreach($fruit as $value)
              {

                  echo "Value :$value <br>";
              }
                
         ?>        
</body>
</html>