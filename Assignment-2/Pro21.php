<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>
   <?php
   $q1 = array(1,2,3,4,5,6);
   $q2 = array("A","B","C","D","E","F");
   $combine = array_merge($q1,$q2);
   foreach($combine as $value){
    echo $value." ";
   }
   ?>
   </center>
</body>
</html>