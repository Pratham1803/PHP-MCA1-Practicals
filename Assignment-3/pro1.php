<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 1</title>
</head>

<body>
    <h1 align="center">Program 1</h1>
    <table width="50%" cellspacing="0" cellpadding="" border="0" align="center">
        <form action="#" method="post">
            <tr>
                <td>Enter Starting number:</td>
                <td><input type="number" name="snum"></td>
            </tr>
            <tr>
                <td>Enter Ending number:</td>
                <td><input type="number" name="enum"></td>
            </tr>
            <tr>
                <td>Enter Direction:</td>
                <td><input type="text" name="dir"></td>
                <td>Direction Must be F and R</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Submit"></td>
            </tr>
        </form>
    </table>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $snum = $_POST["snum"];
        $enum = $_POST["enum"];
        $dir = $_POST["dir"];

        if($enum < $snum){
            echo "Invalid range!";
            exit;
        }

        if ($dir == "F" || $dir == "f") {
            for ($i = $snum; $i <= $enum; $i++) {
                echo $i. " ";
            }
        } elseif ($dir == "R" || $dir == "r" ) {
            for ($i = $enum; $i >= $snum; $i--) {
                echo $i. " ";
            }
        } else {
            echo "Invalid Direction!";
        }
    }
?>
</html>