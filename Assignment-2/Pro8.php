<!--Write a PHP script to display odd and even numbers from 1 to 100. Separate and list them 
accordingly.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd and even numbers from 1 to 100</title>
</head>
<body>
<?php
    $ecount = 0;
    $ocount = 0;

echo "Odd Numbers: <br><br>";
for($i=1;$i<=100;$i++){
  if($i%2!=0)
  {
   echo $i;
   $ecount++;
  }
  
}

echo "<br><br>Even Numbers:<br><br>";
for($i=1;$i<=100;$i++){
  if($i%2==0)
  {
   echo $i;
   $ocount++;
  }
}
echo "<br><br>Total even number =$ecount";
echo "<br><br>Total odd number =$ocount";
?>
   
</body>
</html>