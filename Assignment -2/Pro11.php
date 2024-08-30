<!-- . Write a PHP script to calculate the factorial of a given number. Implement a loop or 
recursion to determine the factorial.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fact = 1;
    for ($i =1; $i <=5; $i++){
        $fact *= $i;
    }
    echo "Factorial of 5 is: ". $fact;
    ?>
    
</body>
</html>