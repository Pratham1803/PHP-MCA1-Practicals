<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management System</title>
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
                <td><input type="submit" value="Insert" id="btnSubmit" name="btnSubmit"></td>
            </tr>
        </form>
    </table>
</body>

<?php
require "contact.php";
require "db.php";

$dbObj = new Db();

echo "<br><br>";
echo "<table border=1 align='center' width='50%'><tr><th>Name</th><th>Mobile</th><th>Email</th><th>Delete</th><th>Update</th></tr>";
foreach ($dbObj->getAllContacts() as $contact){    
    echo "<tr>";
    echo "<td>" . $contact['name'] . "</td>";
    echo "<td>" . $contact['mobile'] . "</td>";
    echo "<td>" . $contact['email'] . "</td>";
    echo "<td><a href='delete.php?id=". $contact['id']."'>Delete</a></td>";
    echo "<td><a href='update.php?id=". $contact['id']."'>Update</a></td>";
    echo "</tr>";
}
echo "</table>";

if (isset($_POST['btnSubmit'])) {
    $contactObj = new Contact();
    $contactObj->setName($_POST['txtName']);
    $contactObj->setMobile($_POST['txtMobile']);
    $contactObj->setEmail($_POST['txtEmail']);    

    if ($dbObj->addContact($contactObj)) {
        echo "<script> alert('Record Inserted, Succesfully');</script>";
        header("Location: index.php");
    } else {
        echo "<script> alert('Failed to Insert Record!!');</script>";
    }
}
?>

</html>