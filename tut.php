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

    <?php
        class Student{

            var $name;
            var $major;
            var $gpa;


            function __construct($aName,$aMajor,$aGpa)
            {
                $this->name=$aName;
                $this->major=$aMajor;
                $this->gpa=$aGpa;
            }
            function hasHonors(){
                if ($this->gpa>=3.5){
                    return "true";
                }
                else{
                    return "false";
                }
            }
        }
    
        $student1 = new Student("Harry Potter","bba",2.8);
        $student2 = new Student("LOD","eee",3.7);
        
        echo $student1 -> hasHonors();
      

    ?>
    
    <?php include "footer.html"?> 
         
        </body>

</html>