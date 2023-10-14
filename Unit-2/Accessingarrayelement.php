<!--Accessing  Array Element in Php-->
<html>
<head>
    
    <title>Accessing  Array Element in Php</title>
</head>
<body>
    <h2>Using for loop in array</h2>
        <?php
              
            $fruit=array("Mango","Orange","Guava","Grapes");
            for($i=0;$i<count($fruit);$i++)
              {

                  echo "\$fruit[$i]=".$fruit[$i]."<br>";
              }
                
         ?>        
</body>
</html>