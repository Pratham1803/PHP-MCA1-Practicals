<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $no = 11;
    echo "<h2>Multiplication Table of $no</h2>";
    for($i = 1; $i<=10; $i++){
        echo "$no x $i = ".($no*$i)."<br>";
    }
    ?>
</body>
</html>