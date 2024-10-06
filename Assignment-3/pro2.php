<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 2</title>
</head>

<body>
    <form method="post" action="#" align="center">
        <label for="units">Enter the number of units consumed:</label>
        <input type="number" id="units" name="units" required>
        <input type="submit" value="Calculate Bill">
    </form>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $units = $_POST["units"];
    $total_bill = 0;

    if ($units <= 50) {
        $total_bill = $units * 1.50;
    } elseif ($units <= 150) {
        $total_bill = (50 * 1.50) + (($units - 50) * 2.25);
    } elseif ($units <= 250) {
        $total_bill = (50 * 1.50) + (100 * 2.25) + (($units - 150) * 2.80);
    } else {
        $total_bill = (50 * 1.50) + (100 * 2.25) + (100 * 2.80) + (($units - 250) * 3.50);
    }
    // Add 20% surcharge
    $total_bill += ($total_bill * 20) / 100;

    echo "<h3>Total Electricity Bill: Rs. ". number_format($total_bill, 2). "</h3>";
}
?>

</html>