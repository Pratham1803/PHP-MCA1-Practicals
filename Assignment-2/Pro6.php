<!-- Write a PHP script to calculate simple interest. Input the principal, rate, and time, and 
display the calculated interest.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $time = 2;
    $rate = 2.5;
    $principal = 1000;

    echo "Amount is = ".$principal;
    echo "<br>";
    echo "Rate is = ".$rate."%";
    echo "<br>";
    echo "Time is = ".$time." years";
    echo "<br>";

    $simpleIntrest = ($principal * $rate * $time) /100; 
    echo "Simple Interest is = ".$simpleIntrest;
    ?>
        
</body>
</html>