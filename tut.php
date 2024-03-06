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

    function getMax($num1, $num2, $num3)
    {
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
    };

    echo getMax(9, 231712, 1);


    ?>



</body>

</html>