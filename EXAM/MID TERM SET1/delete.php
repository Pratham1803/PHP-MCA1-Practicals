<?php
    require "Db.php";
    $dbObj = new Db();
    $dbObj->deleteContactById($_GET['id']);
    header("Location: index.php");
?>