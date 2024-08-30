<!-- Create a PHP script to generate Fibonacci series up to a given number. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $firstnumber = 0;
        $secondnumber = 1;
        $number = 20;

        echo "fibonacci series up to $number: ";
        echo $firstnumber. ", ". $secondnumber. ", ";
        for($i = 2; $i <=$number; $i++){
            $no = $firstnumber + $secondnumber;
            echo "$no, ";
            $firstnumber = $secondnumber;
            $secondnumber = $no;
        }
    ?>
</body>
</html>