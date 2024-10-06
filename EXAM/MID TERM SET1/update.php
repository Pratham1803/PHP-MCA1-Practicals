<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Contact</title>
</head>
<body>
<h2 align="center">Contact Management System</h2>
    <table align="center" width="50%">
        <form action="#" method="post">
            <tr>
                <td>Enter Name: </td>
                <td><input type="text" name="txtName" id="txtName"></td>
            </tr>
            <tr>
                <td>Enter Mobile Num: </td>
                <td><input type="text" name="txtMobile" id="txtMobile"></td>
            </tr>
            <tr>
                <td>Enter Email Address: </td>
                <td><input type="email" name="txtEmail" id="txtEmail"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update" id="btnSubmit" name="btnSubmit"></td>
            </tr>
        </form>
    </table>
</body>
<?php
require "Db.php";

$db = new Db();
$contact = $db->getContactById($_GET['id']);

echo "<script> document.getElementById('txtName').value = '" . $contact->getName() ."'</script>";
echo "<script> document.getElementById('txtMobile').value = '" . $contact->getMobile() ."'</script>";
echo "<script> document.getElementById('txtEmail').value = '" . $contact->getEmail() ."'</script>";

if (isset($_POST['btnSubmit'])) {
    $contact->setName($_POST['txtName']);
    $contact->setMobile($_POST['txtMobile']);
    $contact->setEmail($_POST['txtEmail']);
    $db->updateContact($contact);
    header("Location: index.php");
}
?>
</html>