<!--Super global variable in Php-->
<html>
<head>
    <title>Super Global Variables</title>
</head>
<body>
    <h2>Get method in PHP</h2>
    <form method="get">
        Enter your  name:<br>
        <input type="text" name="fname"><br><br>
        Enter your email:<br>
        <input type="email" name="mail"><br><br>
        <br><br>
     <input type="submit" value="Submit">
    </form>
    <h2>Details</h2>
     
    <?php
        echo "Name:".$_GET["fname"]."<br>";
        echo "E-mail:".$_GET["mail"]."<br>";

    ?>

</body>
</html>