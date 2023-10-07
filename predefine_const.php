<!-- Predefine Constants in php -->

<html>
<head>
    
    <title>Predefine Constants in php</title>
</head>
<body>
    <h2>__LINE__ Constant</h2>
        <?php
         echo "Line number:".__LINE__."<br>";
         echo "Line number:".__LINE__."<br>";
         echo "Line number:".__LINE__."<br>";
         ?>
        
        <h2>__FILE__ Constant</h2>
        <?php
         echo "File path=".__FILE__;
         ?>
         
         <h2>__DIR__ Constant</h2>
         <?php
          echo "Directory name=".__DIR__;
          ?>

          <h2>__FUNCTION__ Constant</h2>
          <?php
            function display()
            {

            echo "The name of function is:".__FUNCTION__;
            }
          
        display();
        
         

         ?>
</body>
</html>

        


         
        
         

         
        
         
        
         

     
        