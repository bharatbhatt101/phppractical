<!--Insert elements in an Array in Php-->
<html>
<head>
    
    <title>Insert elements in an Array in Php</title>
</head>
<body>
    <h2>Inserting element into an array</h2>
        <?php
              
              
            $fruits=array("mango","apple","banana");
            echo "<b>The Current elements of the array</b>:<br>";
            for($i=0;$i<count($fruits);$i++)
              {

                  echo $fruits[$i]. "<br>";
              }
              echo "<br>";

              array_push($fruits,"guava","grapes");//sort array in accending order
              echo "<b>After inserting elements, the array is:<br>";
              for($i=0;$i<count($fruits);$i++)
                {
  
                    echo $fruits[$i]. "<br>";
                } 
         ?>        
</body>
</html>