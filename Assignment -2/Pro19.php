<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<?php

    $course =array("MCA" => "yellow", "BCA" => "orange", "MSCIT" => "white", "BSCIT" => "cyan");
    echo "<table border=1>";
    $i=1;

    echo "<tr><th>Sr.No.</th><th>Course Name</th></tr>";
    foreach($course as $key => $value)
    {
         echo"<tr style='background-color:$value'><td>$i</td><td > $key</td></tr>";
         $i++;
    
    }
?>
    </center>
</body>
</html>


