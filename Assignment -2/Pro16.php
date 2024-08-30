
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $units = 360;
    $surcharge = 0.2;
    $totalBill = 0;
    
    if ($units <= 50) {
        $totalBill = $units * 1.50;
    } elseif ($units <= 150) {
        $first50 = 50 * 1.50;
        $remaining = $units - 50;
        $totalBill = $first50 + ($remaining * 2.25);
    } elseif ($units <= 250) {
        $first50 = 50 * 1.50;
        $next100 = 100 * 2.25;
        $remaining = $units - 150;
        $totalBill = $first50 + $next100 + ($remaining * 2.80);
    } else {
        $first50 = 50 * 1.50;
        $next100 = 100 * 2.25;
        $next100 = 100 * 2.80;
        $remaining = $units - 250;
        $totalBill = $first50 + $next100 + $next100 + ($remaining * 3.50);
    }
    
    $totalBillWithSurcharge = $totalBill + ($totalBill * $surcharge);
    
    echo "Total units Consume : Rs.". number_format($units,2);
    echo "<br> Total bill without surcharge ". number_format($totalBill,2);
    echo "<br>Total Electricity Bill: Rs. ". number_format($totalBillWithSurcharge, 2);
    
    echo "<br>Surcharge: 20%";
    echo "<br>Total Bill with Surcharge: Rs. ". number_format($totalBillWithSurcharge, 2);
 
    ?>

</body>
</html>