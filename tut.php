<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <form action="tut.php" method="post">
        <input type="number" name="number1" placeholder="Enter first number">
        <br>
        <input type="number" name="number2" placeholder="Enter second number">
        <br>
        <input type="submit" value="Calculate Sum" />
    </form>
    <br> -->

    <?php
    function cube($number1)
    {
        return $number1*$number1*$number1;
        
        }
        
            $result = cube(9);
            echo "$result<br>";
            echo cube(9);
   
    ?>



</body>

</html>