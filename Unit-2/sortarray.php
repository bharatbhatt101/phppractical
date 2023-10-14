<!--Sorting Array in Php-->
<html>
<head>
    
    <title>Sorting Array in Php</title>
</head>
<body>
    <h2>Sorting an array</h2>
        <?php
              
              
            $fruits=array("mango","banana","guava","apple");
            echo "Element of before sort array:<br>";
            for($i=0;$i<count($fruits);$i++)
              {

                  echo $fruits[$i]. "<br>";
              }
              echo "<br>";

              sort($fruits);//sort array in accending order
              echo "Element of after sort array:<br>";
              for($i=0;$i<count($fruits);$i++)
                {
  
                    echo $fruits[$i]. "<br>";
                } 
         ?>        
</body>
</html>