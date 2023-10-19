<!--Import and Access input in Php-->
<html>
<head>
    <title>Import and Access input in Php</title>
</head>
<body>
    <h2>Import and Access input in Php</h2>
    <form method="post">
        <label for="num">Enter a number:</label><br>
        <input type="text" name="num"><br><br>
        <input type="submit" value="Submit">
    </form>
     
    <?php

      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
             $num=$_POST["num"];

             if(is_numeric($num))
             {
                $square= $num*$num;
                echo "The square of $num is $square";
             }
             else
             {
                echo "Plase enter valid number.";
             }
      }

    ?>
    


</body>
</html>
        

    
        




