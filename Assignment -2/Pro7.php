<!-- Write a PHP script to manage marks for five subjects. Calculate the total, percentage, and 
determine the class based on the percentage. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
$a=69;
$b=65;
$c=80;
$d=76;
$e=85;
$f=78;
  $tot=$a+$b+$c+$d+$e+$f;
  $per=$tot/6;
  echo "marks of each subject is:" . "<br><br>";
       echo "Android=$a" . "<br><br>";
       echo "Networking=$b"."<br><br>";
       echo "Cloud Computing=$c" . "<br><br>";
       echo "PHP=$d" . "<br><br>";
       echo "ASP.NET=$e" . "<br><br>";
       echo "Java=$f" . "<br><br>";
       echo "percentage is:$per"."<br><br>";
  if($per>80)
{
  echo "class is:<br><br>first class" . "<br><br>";
}  
  elseif($per>70)
{
  echo "class is:<br><br>second class" . "<br><br>";
}  
  elseif($per>60)
{
  echo "class is:<br><br>third class" . "<br><br>";
}  
  else
{
  echo "student is fail";
}  

?>
</body>
</html>