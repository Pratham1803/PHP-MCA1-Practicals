
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruit =array("Apple","Mango","orange","watermelon","grapes");
    echo "Original Array :";
    foreach($fruit as $value){
        echo $value." ";
}
echo "<br><br>";
array_push($fruit,"Apple");
echo "\n\nArray after adding Apple :";
    foreach($fruit as $value){
        echo $value." ";
}
echo "<br><br>";


array_pop($fruit);

echo "\n\nArray after removing last element :";
    foreach($fruit as $value){
        echo $value." ";
}
echo "<br><br>";

sort($fruit);

echo "\n\nArray after sorting :";
    foreach($fruit as $value){
        echo $value." ";
}
    echo "<br><br>";

?>
</body>
</html>