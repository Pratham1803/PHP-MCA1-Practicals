<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement Management System</title>
</head>

<body>
    <center>
        <h2>Advertisement Management System</h2><br><br>

        <table width="50%">
            <form action="#" method="post">
                <tr>
                    <td>Enter Title: </td>
                    <td><input type="text" name="txtTitle" id="txtTitle"></td>
                </tr>

                <tr>
                    <td>Enter Content: </td>
                    <td><input type="text" name="txtContent" id="txtContent"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="Insert" id="btnSubmit" name="btnSubmit"></td>
                </tr>
            </form>
        </table>
        
    </center>
</body>

<?php
require "Db.php";
$dbObj = new Db();

echo "<table width=50% align=center border=1>";
echo "<tr><th>Title</th><th>Content</th><th>DELETE</th><th>UPDATE</th></tr>";

foreach($dbObj->getAllAdvertisements() as $data){
    echo "<tr><td>". $data['title']."</td><td>" . $data['content'] . "</td>";
    echo "<td><a href='delete.php?id=".$data['id']."'>Delete</a></td>";
    echo "<td><a href='update.php?id=".$data['id']."'>Update</a></td>";
    echo "</tr>";
}

echo "</table>";
if (isset($_POST['btnSubmit'])) {
    $title = $_POST['txtTitle'];
    $content = $_POST['txtContent'];

    if ($dbObj->addAdvertisement($title, $content)) {
        echo "<script>alert('Record Inserted')</script>";
        header("Location:index.php");
    } else {
        echo "<script>alert('Record Not Inserted')</script>";
    }
}
?>

</html>