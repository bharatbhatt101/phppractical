<!-- Static and non static variable in php -->

<html>
<head>
    
    <title>Static& Non static Variable scope in php</title>
</head>
<body>
    <h2>Static  scope of a variable</h2>
        <?php
         
         $var=25;//global scope
        
       function test_lvar()
       {
          $var=100;
           echo  $var;
       }
       test_lvar();
         

?>
    <h2>Non static  scope of a variable</h2>
    
    <?php
         
         $var1=10;
         $var2=15;
         
         function test_gvar()
         {
            global $var1,$var2;//global keyword
             echo  "Value of var1:$var1<br>";
             echo  "Value of var2:$var2<br>";
             echo  "Sum of var1 and var2:".$var1+$var2;

         }
         test_gvar();

?>
</body>
</html>