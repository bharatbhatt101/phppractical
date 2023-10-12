<!--Dynamic Function Call-->
<html>
<head>
    
    <title>Dynamic Function Call</title>
</head>
<body>
    <h2>Dynamic Function Call</h2>
        <?php
              function test()
              {
                 echo "Dynamic function call executed";
              }             
              $my_func="test";
              $my_func();
                    
         ?>        
</body>
</html>