<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
</head> <h1>Basic Calcularor</h1>
<body>
      <form action="cal.php" method="get">
      <label for="number1">Value 1:</label><br>
      <input type ="number" name="number1"><br>
      <label for="number2">Value 2:</label><br>
      <input type ="number" name="number2"><br><br>
      <input type ="submit" value="Calculate"/>  
      </form>
      Result =<label for="result">Result</label><br> <?php echo $_GET["number1"] + $_GET["number2"];?> 
           
          
              
            
           
       
      
</body>
</html>