<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Operations</title>
</head>
<body>
    <h2>Enter a Number and Select an Operation:</h2>

    <form method="post">
        <input type="number" name="number" required placeholder="Enter a number">
        <br><br>
        <input type="submit" name="palindrome" value="Palindrome">
        <input type="submit" name="perfect" value="Perfect Number">
        <input type="submit" name="prime" value="Prime Number">
        <input type="submit" name="armstrong" value="Armstrong Number">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['number'];

        //Palindrome
        if (isset($_POST['palindrome'])) {
            $rev = strrev($num);
            if ($num == $rev) {
                echo "<p>$num is a Palindrome Number.</p>";
            } else {
                echo "<p>$num is not a Palindrome Number.</p>";
            }
        }

        //Perfect Number
        if (isset($_POST['perfect'])) {
            $sum = 0;
            for ($i = 1; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $sum += $i;
                }
            }
            if ($sum == $num) {
                echo "<p>$num is a Perfect Number.</p>";
            } else {
                echo "<p>$num is not a Perfect Number.</p>";
            }
        }

        //Prime Number
        if (isset($_POST['prime'])) {
            $is_prime = true;
            if ($num <= 1) {
                $is_prime = false;
            } else {
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) {
                        $is_prime = false;
                        break;
                    }
                }
            }
            if ($is_prime) {
                echo "<p>$num is a Prime Number.</p>";
            } else {
                echo "<p>$num is not a Prime Number.</p>";
            }
        }

        //Armstrong Number
        if (isset($_POST['armstrong'])) {
            $sum = 0;
            $temp = $num;
            $digits = strlen($num);
            while ($temp != 0) {
                $remainder = $temp % 10;
                $sum += pow($remainder, $digits);
                $temp = (int)($temp / 10);
            }
            if ($sum == $num) {
                echo "<p>$num is an Armstrong Number.</p>";
            } else {
                echo "<p>$num is not an Armstrong Number.</p>";
            }
        }
    }
    ?>

</body>
</html>
