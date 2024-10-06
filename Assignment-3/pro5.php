<!DOCTYPE html>
<html>
<head>
    <title>Program 5</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" name="operation" value="Addition">
        <input type="submit" name="operation" value="Difference">
        <input type="submit" name="operation" value="Product">
        <input type="submit" name="operation" value="Division">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case 'Addition':
                $result = $num1 + $num2;
                break;
            case 'Difference':
                $result = $num1 - $num2;
                break;
            case 'Product':
                $result = $num1 * $num2;
                break;
            case 'Division':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Division by zero error!';
                }
                break;
        }
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
