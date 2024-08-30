<!--Write a PHP script to display a series of even numbers (2, 4, 6, 8, 10, ...) up to a specified 
limit. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $limit = 10;
    $evenNumber = 2;

    echo "<h2> Even number up to $limit:</h2>";

    while($evenNumber <= $limit){
        echo $evenNumber. " ";
        $evenNumber += 2; 
    }
    ?>
</body>
</html>