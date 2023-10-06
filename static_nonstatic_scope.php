<!-- Static and non static variable in php -->

<html>
<head>
    
    <title>Static& Non static Variable scope in php</title>
</head>
<body>
    <h2>Static  scope of a variable</h2>
        <?php
         
        
        
       function test_svar()
       {
         static  $a=0;
           echo  $a;
           echo "<br>";
           $a++;
       }
       test_svar();
       test_svar();
       test_svar();
         

?>
    <h2>Non static  scope of a variable</h2>
    
    <?php
         
         
         function test_nsvar()
         {
             $a=0;
             echo  $a;
           echo "<br>";
           $a++;
         }
         test_nsvar();
         test_nsvar();
         test_nsvar();

?>
</body>
</html>