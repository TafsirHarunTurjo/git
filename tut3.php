<!DOCTYPE html>
<html>

<head>
      <title>Page Title</title>
</head>

<body>

      <h2>wtf bhai</h2>
      <p>
            <?php

            function print_array($data)
            {
                  echo '<pre>';
                  print_r($data);
                  echo '</pre>';
            }

            $scores = [1, 2, 3];

            print_array($scores);
            ?>

      </p>


</body>

</html>