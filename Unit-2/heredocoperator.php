<!--Heredoc operators in Php-->
<html>
<head>
    
    <title>Heredoc Operators</title>
</head>
<body>
 <?php
 
    echo "<h2>Heredoc Operator example</h2><br>";
$edpresso = <<<justRandomSpecifier
Write interractive byte sized shots<br>
You can Write on:<br>
1. Web development<br>
2. Dev OPS<br>
3. Machine learning<br>
4. Datascience <br>
5. Networking etc.
justRandomSpecifier;
echo $edpresso;
?>       
</body>
</html>