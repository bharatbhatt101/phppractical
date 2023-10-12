<!--Branching Statement-->
<html>
<head>
    
    <title>Branching Statement</title>
</head>
<body>
    <h2>Example of nested if statement</h2>
        <?php
               
               $a=10;
               $b=20;
               $c=15;
              
               if($a>$b)
               {

                   if($a>$c)
                   {
                       echo "$a is greatest.";
                       
                    }
                    else
                    {
                        echo "$c is greatest.";
                        
                    }
                }
                    else
               {
                    if($b>$c)
                    {

                        echo "$b is greatest.";
                    }
                    else
                    {
                        echo "$c is greater.";
                    }
               }   
         ?>        
         
</body>
</html>     
 
        
         

         
        
         
        
         

     
        