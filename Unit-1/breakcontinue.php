<!--Break & Continue Statement-->
<html>
<head>
    
    <title>Break & Continue Statement</title>
</head>
<body>
    <h2>Example of break statement</h2>
        <?php
              for($i=1;$i<=10;$i++)
              {
                      echo "$i<br>";
                      if($i==5)
                      {
                          break;
                      }
              }  
               
         ?>
         <h2>Example of continue statement</h2>
        <?php
             $x=1;
             echo "List of odd number between 1 to 10<br>";
              while($x<=10)
              {
                 if($x%2==0)
                 {
                      $x++;
                      continue;
                 }
                 else
                 {

                     echo "$x<br>";
                     $x++;
                    }  
                }
               
         ?>        
         
</body>
</html>