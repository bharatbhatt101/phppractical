<!--String operators in Php-->
<html>
<head>
    
    <title>String Operators</title>
</head>
<body>
    <?php
              
           echo "<h2>Concatenating Operator</h2><br>";
            $str1="Welcome ";
            $str2="to ";
            $str3="PHP ";
            $str4="Programming ";
            echo $str1.$str2.$str3.$str4;//Concatenating Operator
            echo "<br>";
              
            echo "<h2>Concatenating Assignment Operator</h2><br>";
            $str="Welcome to PHP ";
           echo $str.="Programming ";     
                
         ?>        
</body>
</html>