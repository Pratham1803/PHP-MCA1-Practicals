<!DOCTYPE html>
<html lang="en">

<?php 
$str = "Hello";
$s2 = "World";

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro 18 </title>
</head>
<body>
<center>
<table border="1" >
        <tr>
            <th>String 1</th>
            <th>String 2 </th>
            <th>Operation</th>
            <th> Result</th>
        </tr>
        <tr>
            <td rowspan = "6"> <?php echo $str;?> </td>
            <td rowspan = "6"><?php echo $s2;?></td>
            <td>String Lenght </td>
           <td><?php echo strlen($str); ?></td>
        </tr>

        <tr>
            <td>String To Upper </td>
           <td><?php echo strtoupper($str); ?></td>
        </tr>
        <tr>
            <td>String To Lower </td>
           <td><?php echo strtolower($str); ?></td>
        </tr>
        <tr>
            <td>Substring </td>
            <td><?php echo substr($str,2,4); ?></td>        
        </tr>
        <tr>
         
        <td> String Replace </td>
        <td><?php echo str_replace("Hello","RS",$str); ?></td>
       
     </tr>
    
    </center>
</table>
</body>
</html>