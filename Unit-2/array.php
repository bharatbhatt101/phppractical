<!--Creating Arrays in Php-->
<html>
<head>
    
    <title>Creating Arrays in Php</title>
</head>
<body>
    <h2>Creating Arrays in Php</h2>
        <?php
              
            $var=array("Red","Blue","Green");
            echo "<b>Colors name:</b><br><br>";
            foreach($var as $value)
              {

                  echo "$value <br>";
              }
                
         ?>        
</body>
</html>