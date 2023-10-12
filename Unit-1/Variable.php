<!-- Example of use variable in php -->

<html>
<head>
    
    <title>Variable in php</title>
</head>
<body>
    <h2>Example of use variable in php</h2>
        <?php
         
         $a=25;
         $area_square=$a*$a;

         echo "Side of square is: $a<br>";
         echo "Area of square: $area_square";

?>
    <h2>Reassigning Variables</h2>
    <?php
         
         $var="Hello";
         $var=4;

         echo "Reassign value: $var";

?>
</body>
</html>