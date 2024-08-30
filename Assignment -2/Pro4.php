<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>convert between US dollars and Indian rupees</title>
</head>
<body>
    <?php
        $indianruppe = 1000;
        $usdoller = 82;

        $converted_indian_ruppe = $usdoller *80;
        $converted_usdoller = $indianruppe /82;

        echo"indian Ruppe =".$indianruppe."After Convertion to Us doller =".$converted_usdoller;
        echo"<br><br>";
        echo"us doller =".$usdoller."Convertion to indian ruppe =".$converted_indian_ruppe;  
    ?>
</body>
</html>