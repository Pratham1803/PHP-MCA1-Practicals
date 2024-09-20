<!-- Write a PHP script to calculate the sum of a series within a given range.-->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
    $start = 1;
    $end = 10;
    $sum = 0;
    
    for ($i = $start; $i <= $end; $i++) {
        $sum += $i;
    }
    
    echo "Sum of numbers from $start to $end is: $sum";
    ?>
 </body>
 </html>
