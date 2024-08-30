


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 
    $numbers = range(1, 10);
    
    echo "Original array: ";
    foreach($numbers as $value){
        echo $value. " ";
    }
    
    echo "<br>Updated array: ";
    $updatedNumbers = array_map(function($number) { return $number * 2; }, $numbers);
    foreach($updatedNumbers as $value){
        echo $value. " ";
    }
    
    $sum = array_sum($updatedNumbers);
    echo "<br>Sum of all elements: ". $sum;
    
 
    $max = max($updatedNumbers);
    $min = min($updatedNumbers);
    echo "<br>Maximum value: ". $max;
    echo "<br>Minimum value: ". $min;
   ?>
</body>
</html>

