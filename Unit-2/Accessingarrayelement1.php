<!--Accessing  Array Element in Php-->
<html>
<head>
    
    <title>Accessing  Array Element in Php</title>
</head>
<body>
    <h2>Using while loop in array</h2>
        <?php
              
            $fruit=array("Mango","Orange","Guava","Grapes");
            
            $i=0;
            while($i<count($fruit))
              {
                echo "\$fruit[$i]=".$fruit[$i]."<br>";
                 
                  $i++;
              }
                
         ?>        
</body>
</html>