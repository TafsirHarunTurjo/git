<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       function processmakrs($marksarr){
        $sum =0;
        foreach($marksarr as $value){
            $sum += $value;

        }
        return $sum;
        
        
       }

    $tjmarks = [12,33,81,29];
    $summarks1 = processmakrs($tjmarks);

    $mirmarks = [22,33,44,66];
    $summarks2 = processmakrs($mirmarks);

    $pmarks = [81,24,21,66];
    $summarks3 = processmakrs($pmarks);

    $laramarks = [ 92,18.,91,18];
    $summarks4 = processmakrs($laramarks);
   
    
    
    
    echo "Turjo Got $summarks1\n<br>";
    echo "Mirza Got $summarks2\n<br>";
    echo "p Got $summarks3\n<br>";
    echo "lara Got $summarks4\n<br>";
    ?>
</body>
</html>