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
                    <td><input type="submit" value="Update" id="btnSubmit" name="btnSubmit"></td>
                </tr>
            </form>
        </table>

    </center>
</body>

<?php
require "Db.php";
$dbObj = new Db();

$data = $dbObj->getAdvertisement($_GET['id']);
echo "<script>document.getElementById('txtTitle').value = '" . $data['title'] . "' </script>";
echo "<script>document.getElementById('txtContent').value = '" . $data['content'] . "' </script>";

if (isset($_POST['btnSubmit'])) {
    $title = $_POST['txtTitle'];
    $content = $_POST['txtContent'];

    if ($dbObj->updateAdvertisment($_GET['id'],$title, $content)) {
        echo "<scriexecute();execute();pt>alert('Record Inserted')</script>";
        header("Location:index.php");
    } else {
        echo "<script>alert('Record Not Inserted')</script>";
    }
}
?>

</html>