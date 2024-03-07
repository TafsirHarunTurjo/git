<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <form action="tut.php" method="POST">
        What is your Grade?
        <br><input type="text" name="grade"><br>

        <input type="submit">
    </form> -->
    <br>
    <?php include "head.html"?>



    <form action="tut.php" method="POST">
First Input <input type="text" name="fi"><br>
Operator <input type="text" name="op"><br>
Last Input <input type="text" name="li"><br><br> <br> <br><br>
<input type="submit">
</form>         
    <br>

    <?php

    $fi= $_POST["fi"];
    $li= $_POST["li"];
    $op= $_POST["op"];

    if($op=="+"){
        echo $fi+$li;
    }
    elseif($op=="-"){
        echo $fi-$li;
    }
    elseif($op=="*"){
        echo $fi*$li;
    }
    elseif($op=="/"){
        echo $fi/$li;
    }
    elseif($op=="%"){
        echo $fi%$li;
    }
    else{
        echo "invalid op";
    }

    ?>
    
    <?php include "footer.html"?> 
         
        </body>

</html>