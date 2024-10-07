<?php
require "Db.php";
$dbObj = new Db();
$dbObj->deleteAdvertisement($_GET['id']);
header("Location:index.php");
?>