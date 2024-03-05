



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="tut.php" method="get">
        <label for="color">Color:</label><br>
        <input type="text" name="color" /> <br>
        <label for="pluralnoun">Plural Noun:</label><br>
        <input type="text" name="pluralnoun" /><br> 
        <label for="celebrity">Celebrity:</label><br>
        <input type="text" name="celebrity" /> <br> <br> 
        <input type="submit" value="Submit" /> 
</form>
<br>

 <?php  $color = $_GET["color"];
        $pluralNoun = $_GET["pluralnoun"];
        $celebrity = $_GET["celebrity"];    
        echo "Roses are $color<br>";
        echo "$pluralNounare blue<br>";
        echo "i love $celebrity<br>";
?>      



</body>
</html>