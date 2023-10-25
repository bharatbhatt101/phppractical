<!--Iterative Function in Php-->
<html>
<head>
    
    <title>Iterative Function in Php</title>
</head>
<body>
    <h2>Current() function in array</h2>
        <?php
            $fruits=array("mango","apple","banana","guava");
            echo "The current element is:".current($fruits);
             echo "<br>";
          ?>    
     <h2>next() function in array</h2>
        <?php
            $fruits=array("mango","apple","banana","guava");
            echo "The next element is:".next($fruits);
             echo "<br>";
     ?>    
     <h2>prev() function in array</h2>
        <?php
            $fruits=array("mango","apple","banana","guava");
            echo "The last element is:".end($fruits);
            echo "<br>";
            echo "The previous element is:".prev($fruits);
             echo "<br>";
     ?>    
     <h2>reset() function in array</h2>
        <?php
            $fruits=array("mango","apple","banana","guava");
            echo "Again first element:".reset($fruits);
             echo "<br>";
     ?>    
     <h2>end() function in array</h2>
        <?php
            $fruits=array("mango","apple","banana","guava");
            echo "The end element is:".end($fruits);
             echo "<br>";
     ?>        

</body>
</html>