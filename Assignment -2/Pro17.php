<?php 
 $i = 10;

 $b1 = (boolean)$i;
 $s1 = (string)$i;
 $d1 = (double)$i;
 $a1 = (array)$i;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table border="1" >
        <tr>
            <th>Variable name </th>
            <th>Variable type </th>
            <th>Variable Value</th>
            <th> Converted Type</th>
            <th>Converted Value</th>
        </tr><tr>
            <td rowspan = "4"> i</td>
            <td rowspan = "4"><?php echo gettype($i);?></td>
            <td rowspan = "4"><?php echo $i; ?></td>

           <td><?php echo gettype($b1); ?></td>
           <td><?php echo $b1; ?></td>
        </tr>
        <tr>
        <td><?php echo gettype($s1); ?></td>
        <td><?php echo $s1; ?></td>
        </tr>

        <tr>
        <td><?php echo gettype($d1); ?></td>
        <td><?php echo $d1; ?></td>
        </tr>

        <tr>
        <td><?php echo gettype($a1); ?></td>
        <td><?php print_r($a1); ?></td>
        </tr>
<?php 
 $s = "10";

 $b1 = (boolean)$s;
 $i1 = (int)$s;
 $d1 = (double)$s;
 $a1 = (array)$s;
 ?>

 <tr>
 <td rowspan = "4"> S</td>
 <td rowspan = "4"><?php echo gettype($s);?></td>
 <td rowspan = "4"><?php echo $s; ?></td>

<td><?php echo gettype($b1); ?></td>
<td><?php echo $b1; ?></td>
</tr>
<tr>
<td><?php echo gettype($i1); ?></td>
<td><?php echo $i1; ?></td>
</tr>

<tr>
<td><?php echo gettype($d1); ?></td>
<td><?php echo $d1; ?></td>
</tr>

<tr>
<td><?php echo gettype($a1); ?></td>
<td><?php print_r($a1); ?></td>
</tr>
<?php 
 $b = TRUE;

 $s1 = (string)$b;
 $i1 = (int)$b;
 $d1 = (double)$b;
 $a1 = (array)$b;
 ?>

 <tr>
 <td rowspan = "4"> b</td>
 <td rowspan = "4"><?php echo gettype($b);?></td>
 <td rowspan = "4"><?php echo $b; ?></td>

<td><?php echo gettype($s1); ?></td>
<td><?php echo $s1; ?></td>
</tr>
<tr>
<td><?php echo gettype($i1); ?></td>
<td><?php echo $i1; ?></td>
</tr>

<tr>
<td><?php echo gettype($d1); ?></td>
<td><?php echo $d1; ?></td>
</tr>

<tr>
<td><?php echo gettype($a1); ?></td>
<td><?php print_r($a1); ?></td>
</tr>
 
</table>
</center>
</body>
</html>