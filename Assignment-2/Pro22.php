<!--  Create a PHP script that accepts an index value from the user and retrieves the 
corresponding element from an array of 5 values. Display the value associated with the 
provided index-->

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
    
    $var = array(1=>"Hello",2=> "Rishil",3 =>"Shah");
    echo "Array is <br>";
    foreach($var as $value){
        echo $value."<br>";
    }
      $index = 3;
      echo "<br>value at index $index:". $var[$index];
    ?>
   </h1>
    </center>
</body>
</html>