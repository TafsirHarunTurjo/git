<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <form action="tut.php" method="post">

        <input type="checkbox" name="movies[]" value="Shawshank Redamptions">
        <label for="movies[]"> Shawshank Redamptions</label><br>
        <input type="submit" value="Submit" />
    </form> -->
    <br>

    <?php
        function firstFunction($name, $age, $gender){
            echo    "hello $name you are $age and you are $gender<br>";
        }
          firstFunction("Tafsir", 29, "male");
          firstFunction("Ridi", 29, "female");
          firstFunction("Fatima", 29, "gay");

    ?>



</body>

</html>