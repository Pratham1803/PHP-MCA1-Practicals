
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
    
       $range = array(1,2,3,4,5,6,7,8,9,10);
       foreach($range as $num){
          if($num % 2 == 1){  
             echo $num." ";
   }
       }
       ?>  
       </center>
</body>
</html>
