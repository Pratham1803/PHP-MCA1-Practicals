<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h1>
    <center>
   <?php
   $ass = array("Akshat" =>10, "Rishil" =>11, "Fenil" =>8 ,"Smit" =>5);
   $ass["Kabir"]= 6;
   
   arsort($ass);
   foreach($ass as $name => $marks){
       echo "Name: ".$name." Marks: ".$marks."<br>";
   }

   
   $sum = array_sum($ass);
   $average = $sum / count($ass);
   echo "Average marks: ".$average."<br>";
   ?>

</center>
</body>
</html>